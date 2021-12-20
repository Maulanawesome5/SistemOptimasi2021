# Load package
import numpy as np
import pandas as pd
import matplotlib.pyplot as plt

# Load data
saham = pd.read_csv(r'D:\LATIHAN PEMROGRAMAN\SISTEM OPTIMASI\01 - Portofolio Optimasi\PWON.JK.csv', delimiter=";")
print("\n\n", saham)
print("\n\n",saham.head())

# Setting time
import datetime as dt
start = dt.datetime(2020,1,2)
end = dt.datetime(2020,1,30)

# Closing Price
closingPrice = saham['Adj Close']
closingPrice.head()

# Menghitung persentase perubahan
pakuwon = closingPrice.pct_change().apply(lambda x:np.log(1+x))
print("\n\n", pakuwon.head())

# Menghitung Variance
varians_pakuwon = pakuwon.var()
print("\n\nVarians Pakuwon : ", varians_pakuwon)

# Menghitung Volatility
volatility_pakuwon = np.sqrt(varians_pakuwon * 250)
print("\n\nVolatility Pakuwon : ", volatility_pakuwon)

# Plotting Volatility to bar chart
plt.plot(closingPrice)
plt.show()
