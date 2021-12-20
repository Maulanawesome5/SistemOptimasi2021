# Load package
import numpy as np
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





