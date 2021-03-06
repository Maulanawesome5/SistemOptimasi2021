# Load package
import numpy as np
from numpy.core.fromnumeric import var
import pandas as pd
from pandas_datareader import data
import matplotlib.pyplot as plt

# Membangun sistem optimasi portofolio saham

# Membaca data harga saham dengan metode scrapping
dataFrame = data.DataReader(
    ['APLN.JK', 'ASRI.JK', 'CTRA.JK', 'PWON.JK', 'SMRA.JK'], 'yahoo',
    start = '2020/12/07',
    end = '2021/12/07')
print(dataFrame)

# Mengambil tabel harga close
dataFrame = dataFrame['Adj Close']
print(dataFrame.head())

# Mencari matriks correlation dan covariance

# Menghitung matriks covariance dengan persentase perubahan harga
cov_matrix = dataFrame.pct_change().apply(lambda x: np.log(1+x)).cov()
print("\n\tNilai covariance kelima saham \n", cov_matrix)

# Menghitung correlation matrix untuk kelima saham
corr_matrix = dataFrame.pct_change().apply(lambda x: np.log(1+x)).corr()
print("\n\tNilai correlation kelima saham \n", cov_matrix)

# Portofolio varians
# Memberikan nilai random untuk bobot varians portfolio
bobot_portofolio = {'APLN.JK' : 0.1, 'ASRI.JK' : 0.2, 'CTRA.JK' : 0.5, 'PWON.JK' : 0.2, 'SMRA.JK' : 0.8}
port_var = cov_matrix.mul(bobot_portofolio, axis=0).mul(bobot_portofolio, axis=1).sum().sum()
print("\nNilai bobot portfolio saham = ", port_var)

# Portfolio expected return
# Return tahunan untuk masing-masing perusahaan
ind_er = dataFrame.resample('Y').last().pct_change().mean()
print("\n\tExpected Return tahunan \n", ind_er)

# Portfolio return
bobot = [0.1, 0.2, 0.5, 0.2, 0.8]
port_er = (bobot * ind_er).sum()
print("\nReturn Portfolio yang didapatkan = ", port_er)


# Plotting the efficient frontier
# Volatilitas diberikan dari standar deviasi tahunan. Dikali dengan 250 karena
# dalam setahun terdapat 250 hari aktif perdagangan
ann_sd = dataFrame.pct_change().apply(lambda x: np.log(1 + x)).std().apply(lambda x: x * np.sqrt(250))
print("\n\tNilai standar deviasi tahunan kelima saham \n", ann_sd)

# Membuat program portofolio aset saham
assets = pd.concat([ind_er, ann_sd], axis=1) # Membuat tabel untuk visualisasi return dan volatilitas dari aset
assets.columns = ['Returns', 'Volatility']
print("\n\tVisualisasi portfolio dalam bentuk tabel \n", assets)


# Selanjutnya
portfolio_return = []
portfolio_volatile = []
portfolio_bobot = []

num_assets = len(dataFrame.columns)
num_portfolios = 10000

for portfolio in range(num_portfolios):
    weights = np.random.random(num_assets)
    weights = weights/np.sum(weights)
    portfolio_bobot.append(weights)
    returns = np.dot(weights, ind_er)

    portfolio_return.append(returns)
    var = cov_matrix.mul(weights, axis=0).mul(weights, axis=1).sum().sum()
    sd = np.sqrt(var)
    ann_sd = sd * np.sqrt(250)
    portfolio_volatile.append(ann_sd)

data = {'Returns' : portfolio_return, 'Volatility' : portfolio_volatile}

for counter, symbol in enumerate(dataFrame.columns.tolist()):
    print(counter, symbol)
    data[symbol + ' weight'] = [bobot[counter] for bobot in portfolio_bobot]

portfolio = pd.DataFrame(data)
print("\n\tTabel Return, Volatilitas, dan Bobot Saham \n",portfolio.head())


# Plot efficient frontier
portfolio.plot.scatter(x='Volatility', y='Returns', marker='o', s=10, alpha=0.3, grid=True, figsize=[10,10])
#plt.show() # Menampilkan grafik scatter


# How to read the Efficient Frontier
min_vol_port = portfolio.iloc[portfolio['Volatility'].idxmin()]
print("\n\tMinimal Volatilitas Portfolio saham\n", min_vol_port)

# Plotting the minimum volatility portfolio
plt.subplots(figsize=[10, 10])
plt.scatter(portfolio['Volatility'], portfolio['Returns'], marker='o', s=10, alpha=0.3)
plt.scatter(min_vol_port[1], min_vol_port[0], color='r', marker='*', s=500)
# plt.show() # Menampilkan grafik scatter


# Sharpe ratio

# Optimal Risky Portfolio
# Finding optimal risky portfolio
faktor_resiko = 0.01 # Faktor resiko
optimal_risky_port = portfolio.iloc[((portfolio['Returns'] - faktor_resiko) / portfolio['Volatility']).idxmax()]
print("\n\tPortfolio Saham dengan Resiko yang optimal\n", optimal_risky_port)

# Plotting optimal portfolio
plt.subplots(figsize=(10, 10))
plt.scatter(portfolio['Volatility'], portfolio['Returns'],marker='o', s=10, alpha=0.3)
plt.scatter(min_vol_port[1], min_vol_port[0], color='r', marker='*', s=500)
plt.scatter(optimal_risky_port[1], optimal_risky_port[0], color='g', marker='*', s=500)
# plt.show() # Menampilkan grafik scatter

