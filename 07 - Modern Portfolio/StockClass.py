import os
import glob
import pandas as pd

# Import data
alamat_file = r'D:\LATIHAN PEMROGRAMAN\SISTEM OPTIMASI\DATA_HARGA_SAHAM'
fileName = os.listdir(alamat_file)
print(fileName)

df = pd.DataFrame()

for f in fileName:
    data = pd.read_excel(f, 'Sheet1')
    df = df.append(data)

print(df)
