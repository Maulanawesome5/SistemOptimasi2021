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
print(alokasiBobot)

# Total expected return
expectedReturn = (alokasiBobot * bobot).sum()
print(expectedReturn)

# Building Optimal Risky portfolio





