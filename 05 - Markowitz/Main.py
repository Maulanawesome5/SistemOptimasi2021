import matplotlib.pyplot as plt
import numpy as np
import cvxopt as opt
from cvxopt import blas, solvers
import pandas as pd

np.random.seed(123)

#Turn off progress printing
solvers.options['show_progress'] = False

import plotly
import cufflinks

# (*) To communicate with Plotly server, sign in with credentials file
import plotly.plotly as py

# (*) Useful Python / Plotly tools
import plotly.tools as tls

# (*) Useful Python / Plotly tools
from plotly.graph_objs import *

# Assume that we have 4 assets, each with a return series of length 1000.
# We can use numpy.random.rand to sample returns from a normal distribution

# Number of assets
n_assets = 4

# Number of observations
n_obs = 1000
return_vec = np.random.randn(n_assets, n_obs)

fig = plt.figure()
plt.plot(return_vec.T, alpha=.4);
plt.xlabel('time')
plt.ylabel('returns')
py.iplot_mpl(fig, filename='s6_damped_oscillation')

"""
These return series can be used to create a wide range of portofolios, which all
have different return and risks (standar deviation). We can produce a wide range of
random weight vectors and plot those portofolios. As we want all our capital to be
invested, this vector will have to some to one.
"""

def rand_weights(n):
    # Produce n random weights that sum to 1
    k = np.random.randn(n)
    return k / sum(k)

print(rand_weights(n_assets))
print(rand_weights(n_assets))

"""
Next, lets evaluate how many of these random portfolios would perform.
Towards this goal we are calculating the mean returns as well as the volatility
(here we are using standard deviation). You can also see that there is a filter
that only allows to plot portfolios with a standard deviation of < 2 for better illustration.
"""

def random_portfolio(returns):
    # Return the mean and standard deviation of return for a random portfolio
    p = np.asmatrix(np.mean(returns, axis=1))
    w = np.asmatrix(rand_weights(returns.shape[0]))
    c = np.asmatrix(np.cov(returns))
    
    mu = w * p.T
    sigma = np.sqrt(w * c * w.T)

    # This recursion reduces outliers to keep plots pretty
    if sigma > 2:
        return random_portfolio(returns)
    return mu, sigma

# Let's generate the mean returns and volatility for 500 random portfolios
n_portfolios = 500
means, stds = np.column_stack([
    random_portfolio(return_vec)
    for _ in range(n_portfolios)
])

"""
Upon plotting those you will observe that they form a characteristic parabolic shape
called the ‘Markowitz bullet‘ with the boundaries being called the ‘efficient frontier‘
where we have the lowest variance for a given expected.
"""

fig = plt.figure()
plt.plot(stds, means, 'o', markersize=5)
plt.xlabel('std')
plt.ylabel('mean')
plt.title('Mean and standard deviation of returns of randomly generated portfolios')
py.iplot_mpl(fig, filename='mean_std', strip_style=True)


# Markowitz optimization and the Efficient Frontier
def optimal_portfolio(returns):
    n = len(returns)
    returns = np.asmatrix(returns)
    
    N = 100
    mus = [10**(5.0 * t/N - 1.0) for t in range(N)]
    
    # Convert to cvxopt matrices
    S = opt.matrix(np.cov(returns))
    pbar = opt.matrix(np.mean(returns, axis=1))
    
    # Create constraint matrices
    G = -opt.matrix(np.eye(n))   # negative n x n identity matrix
    h = opt.matrix(0.0, (n ,1))
    A = opt.matrix(1.0, (1, n))
    b = opt.matrix(1.0)
    
    # Calculate efficient frontier weights using quadratic programming
    portfolios = [solvers.qp(mu*S, -pbar, G, h, A, b)['x'] 
                  for mu in mus]
    
    ## CALCULATE RISKS AND RETURNS FOR FRONTIER
    returns = [blas.dot(pbar, x) for x in portfolios]
    risks = [np.sqrt(blas.dot(x, S*x)) for x in portfolios]
    
    ## CALCULATE THE 2ND DEGREE POLYNOMIAL OF THE FRONTIER CURVE
    m1 = np.polyfit(returns, risks, 2)
    x1 = np.sqrt(m1[2] / m1[0])
    
    # CALCULATE THE OPTIMAL PORTFOLIO
    wt = solvers.qp(opt.matrix(x1 * S), -pbar, G, h, A, b)['x']
    return np.asarray(wt), returns, risks

weights, returns, risks = optimal_portfolio(return_vec)

fig = plt.figure()
plt.plot(stds, means, 'o')
plt.ylabel('mean')
plt.xlabel('std')
plt.plot(risks, returns, 'y-o')
py.iplot_mpl(fig, filename='efficient_frontier', strip_style=True)

# Backtesting on real market data
from zipline.utils.factory import load_bars_from_yahoo
end = pd.Timestamp.utcnow()
start = end - 2500 * pd.tseries.offsets.BDay()

data = load_bars_from_yahoo(stocks=[
    'IBM', 'GLD', 'XOM', 'AAPL', 'MSFT', 'TLT', 'SHY']
    , start=start, end=end)

data.loc[:, :, 'price'].iplot(filename='prices', yTitle='price in $', world_readable=True, asDates=True)

"""
Next, we'll create a zipline algorithm by defining two functions -- initialize() which
is called once before the simulation starts and handle_data() which is called for every
trading bar. We then instantiate the algorithm object.
"""

import zipline
from zipline.api import (add_history, history, set_slippage, slippage, set_commission, commission, order_target_percent)
from zipline import TradingAlgorithm


def initialize(context):
    '''
    Called once at the very beginning of a backtest (and live trading). 
    Use this method to set up any bookkeeping variables.
    
    The context object is passed to all the other methods in your algorithm.

    Parameters

    context: An initialized and empty Python dictionary that has been 
             augmented so that properties can be accessed using dot 
             notation as well as the traditional bracket notation.
    
    Returns None
    '''
    # Register history container to keep a window of the last 100 prices.
    add_history(100, '1d', 'price')
    
    # Turn off the slippage model
    set_slippage(slippage.FixedSlippage(spread=0.0))
    
    # Set the commission model (Interactive Brokers Commission)
    set_commission(commission.PerShare(cost=0.01, min_trade_cost=1.0))
    context.tick = 0
    
def handle_data(context, data):
    '''
    Called when a market event occurs for any of the algorithm's 
    securities. 

    Parameters

    data: A dictionary keyed by security id containing the current 
          state of the securities in the algo's universe.

    context: The same context object from the initialize function.
             Stores the up to date portfolio as well as any state 
             variables defined.

    Returns None
    '''
    # Allow history to accumulate 100 days of prices before trading
    # and rebalance every day thereafter.
    context.tick += 1
    if context.tick < 100:
        return
    
    # Get rolling window of past prices and compute returns
    prices = history(100, '1d', 'price').dropna()
    returns = prices.pct_change().dropna()
    try:
        # Perform Markowitz-style portfolio optimization
        weights, _, _ = optimal_portfolio(returns.T)
        # Rebalance portfolio accordingly
        for stock, weight in zip(prices.columns, weights):
            order_target_percent(stock, weight)
    except ValueError as e:
        # Sometimes this error is thrown
        # ValueError: Rank(A) < p or Rank([P; A; G]) < n
        pass
        
# Instantinate algorithm        
algo = TradingAlgorithm(initialize=initialize, handle_data=handle_data)
# Run algorithm
results = algo.run(data)
results.portfolio_value.iplot(filename='algo_perf', yTitle='Cumulative capital in $', world_readable=True, asDates=True)
