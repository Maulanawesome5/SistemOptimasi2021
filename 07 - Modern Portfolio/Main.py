"""
__________________________________________________________
Tabel Sektor | Tabel Subsektor | Tabel Saham | Tabel Harga
__________________________________________________________
   Property  |   Real Estate   |    APLN     |     123
   Property  |   Real Estate   |    ASRI     |     163
   Property  |   Real Estate   |    CTRA     |     990
   Property  |   Real Estate   |    PWON     |     462
   Property  |   Real Estate   |    PWON     |     850

Input :
1. Input Master -> Sektor, Subsektor, Kode Saham (mis. ASII, ACES, AGII...)
2. Input Investasi
3. Input Harga Beli
4. Input Kalkulasi
5. Transaksi

Output Tabel :
______________________________________________________________________________
No. | Ticker Saham |      Nama Saham              | Harga | Bobot | Jumlah Lot
______________________________________________________________________________
1.  |    APLN.JK   | PT. Agung Podomoro Land Tbk. |  123  |
2.  |    ASRI.JK   | PT. Alam Sutera Realty Tbk.  |  163  |
3.  |    CTRA.JK   | PT. Ciputra Development Tbk. |  990  |
4.  |    PWON.JK   | PT. Pakuwon Jati Tbk.        |  462  |
5.  |    SMRA.JK   | PT. Summarecon Agung Tbk.    |  850  |
"""
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

print(dataFrame)






