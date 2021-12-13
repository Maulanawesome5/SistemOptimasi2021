import numpy as np
from numpy.core.fromnumeric import mean
import pandas as pd

"""
Permintaan    Nilai    Frekuensi
Roti (x)      Tengah
20 - 24        22          5
25 - 29        27         10
30 - 34        32         20
35 - 39        37         30
40 - 44        42         20
45 - 49        47         10
50 - 54        52          5
"""

# Dataset jumlah pembuatan roti
permintaan1 = np.array([20, 21, 22, 23, 24])
permintaan2 = np.array([25, 26, 27, 28, 29])
permintaan3 = np.array([30, 31, 32, 33, 34])
permintaan4 = np.array([35, 36, 37, 38, 39])
permintaan5 = np.array([40, 41, 42, 43, 44])
permintaan6 = np.array([45, 46, 47, 48, 49])
permintaan7 = np.array([50, 51, 52, 53, 54])

datasetX = np.array([
    (permintaan1), (permintaan2), (permintaan3), 
    (permintaan4), (permintaan5), (permintaan6), (permintaan7)
])
print("Permintaan Roti (X):\n", datasetX)

meanPermintaan = np.mean([
    (mean(permintaan1)),
    (mean(permintaan2)),
    (mean(permintaan3)),
    (mean(permintaan4)),
    (mean(permintaan5)),
    (mean(permintaan6)),
    (mean(permintaan7))
])

for i in meanPermintaan:
    if i <= 8:
        print(meanPermintaan[i])

# print("\nMean nilai Permintaan : \n", meanPermintaan)
# meanPermintaan = np.array([22, 27, 32, 37, 42, 47, 52])
# frekuensi = np.array([5, 10, 20, 30, 20, 10, 5])

# def totalFrekuensi(x):
#     freq = sum(x)
#     return freq

# print("Total Frekuensi =", totalFrekuensi(frekuensi))

# densitas = frekuensi[0] # Data frekuensi '5'
# def distribusiDensitas(densitas):
    # densitas = frekuensi[0] / 100
    # for i in range(7):
    #     print(frekuensi[i])
    #     i += 1
    # return densitas

# print(distribusiDensitas(frekuensi))
