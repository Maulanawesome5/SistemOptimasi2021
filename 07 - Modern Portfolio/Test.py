# Load package
import numpy as np
import pandas as pd
from pandas_datareader import data
import matplotlib.pyplot as plt

# Read data
test = data.DataReader(
    ['APLN.JK', 'ASRI.JK', 'CTRA.JK', 'PWON.JK', 'SMRA.JK'], 'yahoo',
    start = '2020/12/07',
    end = '2021/12/07')

# Closing price
test = test['Adj Close']
test.head()

# Log of percentage
apln = test['APLN.JK'].pct_change().apply(lambda x: np.log(1+x))
asri = test['ASRI.JK'].pct_change().apply(lambda x: np.log(1+x))
ctra = test['CTRA.JK'].pct_change().apply(lambda x: np.log(1+x))
pwon = test['PWON.JK'].pct_change().apply(lambda x: np.log(1+x))
smra = test['SMRA.JK'].pct_change().apply(lambda x: np.log(1+x))

# Variance
var_apln = apln.var()
var_asri = asri.var()
var_ctra = ctra.var()
var_pwon = pwon.var()
var_smra = smra.var()

# Volatility
apln_volatile = np.sqrt(var_apln * 250)
asri_volatile = np.sqrt(var_asri * 250)
ctra_volatile = np.sqrt(var_ctra * 250)
pwon_volatile = np.sqrt(var_pwon * 250)
smra_volatile = np.sqrt(var_smra * 250)

# Plotting Volatility kelima saham
test.pct_change().apply(lambda x: np.log(1+x)).std().apply(lambda x: x*np.sqrt(250)).plot(kind='bar')

# Calculating covariance
test1 = test.pct_change().apply(lambda x: np.log(1+x))
test1.head()

# Covariance
test1['APLN.JK'].cov(test1['ASRI.JK'])

# Correlation
test1['APLN.JK'].corr(test1['ASRI.JK'])

# Expected Return
test2 = test.pct_change().apply(lambda x: np.log(1+x))
test2.head()

# Define weight for allocation
bobot = [0.2, 0.8, 0.5, 0.5, 8.0]
alokasiBobot = test2.mean()
alokasiBobot

# Total expected return
expectedReturn = (alokasiBobot * bobot).sum()
expectedReturn

# Building Optimal Risky portfolio
df = test
df.head()

# Covariance and Correlation matrix
# Log of percentage change
cov_matrix = df.pct_change().apply(lambda x: np.log(1+x)).cov()
cov_matrix

# Correlation kelima saham
corr_matrix = df.pct_change().apply(lambda x: np.log(1+x)).corr()
corr_matrix


# portfolio variance
# randomly weighted portfolio's variance
bobot = {'APLN.JK' : 0.2, 'ASRI.JK' : 0.8, 'CTRA.JK' : 0.5, 'PWON.JK' : 0.5, 'SMRA.JK' : 8.0}
port_var = cov_matrix.mul(bobot, axis=0).mul(bobot, axis=1).sum().sum()
port_var

# portfolio expected return
# yearly return for individual companies
ind_er = df.resample('Y').last().pct_change().mean()
ind_er

# portfolio return
bobot = [0.2, 0.8, 0.5, 0.5, 8.0]
port_er = (bobot * ind_er).sum()
print(port_er)

# Volatility is given by the annual standard deviation. We multiply by 250 because there are 250 trading days/year.
ann_sd = df.pct_change().apply(lambda x: np.log(1+x)).std().apply(lambda x: x*np.sqrt(250))
print(ann_sd)


assets = pd.concat([ind_er, ann_sd], axis=1) # Creating a table for visualising returns and volatility of assets
assets.columns = ['Returns', 'Volatility']
print(assets)

p_ret = [] # Define an empty array for portfolio return
p_vol = [] # Define an empty array for portfolio volatility
p_weights = [] # Define an empty array for asset weight

num_assets = len(df.columns)
num_portfolios = 10000

for portfolio in range(num_portfolios):
    weights = np.random.random(num_assets)
    weights = weights/np.sum(weights)
    p_weights.append(weights)
    returns = np.dot(weights, ind_er)
    
    p_ret.append(returns)
    var = cov_matrix.mul(weights, axis=0).mul(weights, axis=1).sum().sum()# Portfolio Variance
    sd = np.sqrt(var) # Daily standard deviation
    ann_sd = sd*np.sqrt(250) # Annual standard deviation = volatility
    p_vol.append(ann_sd)

data = {'Returns':p_ret, 'Volatility':p_vol}

for counter, symbol in enumerate(df.columns.tolist()):
    data[symbol + ' weight'] = [bobot[counter] for bobot in p_weights]

portfolios = pd.DataFrame(data)
print(portfolios.head())

# Plot efficient frontier
portfolios.plot.scatter(x='Volatility', y='Returns', marker='o', s=10, alpha=0.3, grid=True, figsize=[10,10])



