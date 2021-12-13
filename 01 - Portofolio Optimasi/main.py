# Load Packages
import numpy as np
import pandas as pd
from pandas_datareader import data
import matplotlib.pyplot as plt
#%matplotlib inline

# Setting Waktu
import datetime as dt
start = dt.datetime(2019,1,1)
end = dt.datetime(2020,12,31)

# Import Data
saham = data.DataReader(['PWON.JK', 'APLN.JK', 'CTRA.JK', 'ASRI.JK', 'SMRA.JK'], 'yahoo', start, end)
saham.head()

# Fuck off
