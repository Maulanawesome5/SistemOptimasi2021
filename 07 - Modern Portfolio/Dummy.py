# Import package
import pandas as pd
import numpy as np
import pandas_datareader
import tkinter
import matplotlib.pyplot as plt
from tkinter import ttk
from pandas_datareader import data
from tabulate import tabulate


namaSaham = [] # List kosong untuk menampung input nama saham
stop = False

print(f"\n\nUntuk menjalankan program, silahkan masukan ticker saham yang anda inginkan. \
Dibelakangnya diakhiri dengan .JK 'Contoh: BBCA.JK'\n\n")

while(not stop):
   inputNama_Saham = input("Masukkan kode ticker saham : ")
   namaSaham.append(inputNama_Saham)

   tanya = input("Tambahkan lagi (y/n) ?")
   if(tanya == 'n'):
      stop = True

# Preview hasil input list data nama saham
print("\nSaham yang telah anda pilih adalah : \n", namaSaham)
print(2*"\n") # Indentasi enter

# Membuat data frame dari list variabel, kemudian scrapping data melalui yahoo finance
dataFrame = data.DataReader(namaSaham, 'yahoo', start = '2020/12/07', end = '2021/12/07')
# print(dataFrame) # Menampilkan bentuk dataframe

# Memilih tabel harga close pada dataframe
closingPrice = dataFrame['Close']
print("Tabel harga Closing")
print(closingPrice.head(), "\n")

# Menghitung persentase perubahan harga
apln = closingPrice.iloc[0].pct_change().apply(lambda x: np.log(1 + x))
asri = closingPrice.iloc[1].pct_change().apply(lambda x: np.log(1 + x))
print(f"\nPersentase perubahan harga {namaSaham[0]} \n", apln.head())
print(f"\nPersentase perubahan harga {namaSaham[1]} \n", asri.head())

