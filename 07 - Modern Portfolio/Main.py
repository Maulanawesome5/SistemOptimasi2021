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
# print(dataFrame) # Menampilkan bentuk dataframe

# Memilih tabel harga close pada dataframe
closingPrice = dataFrame['Close']
print(closingPrice.head())

# Menghitung persentase perubahan harga
# Menggunakan index pada tipe data list ['APLN' = 0, 'ASRI' = 1, 'CTRA' = 2, 'PWON' = 3, 'SMRA' = 4]
apln = closingPrice['APLN.JK'].pct_change().apply(lambda x: np.log(1 + x))
asri = closingPrice['ASRI.JK'].pct_change().apply(lambda x: np.log(1 + x))
print("\n", apln.head(), asri.head())

# Menghitung varians harga saham
varians_apln = apln.var()
varians_asri = asri.var()
print("\n",f"Varians {namaSaham[0]} = {varians_apln}, Varians {namaSaham[1]} = {varians_asri} ")

# Menghitung volatilitas pergerakan saham
apln_volatile = np.sqrt(varians_apln * 250)
asri_volatile = np.sqrt(varians_asri * 250)
print("\n",f"Volatilitas {namaSaham[0]} = {apln_volatile}, Volatilitas {namaSaham[1]} = {asri_volatile} ")

# Menampilkan volatilitas kedua saham menjadi bentuk diagram batang
closingPrice.pct_change().apply(
    lambda x: np.log(1 + x)).std().apply(
        lambda x: x*np.sqrt(250)).plot(kind='bar')
# plt.show()

# Persentase perubahan
test1 = closingPrice.pct_change().apply(lambda x: np.log(1+x))
print(test1.head())

# Menghitung covariance kedua saham
test1['APLN.JK'].cov(test1['ASRI.JK'])
print(f"\n\tNilai Covariance antara {namaSaham[0]} dengan {namaSaham[1]} \n",test1)

# Menghitung correlation antara kedua saham
test1['APLN.JK'].corr(test1['ASRI.JK'])
print(f"\n\tNilai Correlation antara {namaSaham[0]} dengan {namaSaham[1]} \n", test1)

# Menghitung Expected Return kedua saham
test2 = closingPrice.pct_change().apply(lambda x: np.log(1 + x))
print(f"\n\tNilai Expected Return antara {namaSaham[0]} dengan {namaSaham[1]} \n", test2)

# Menghitung bobot (weight) untuk alokasi dana terhadap kedua saham
bobot = [0.2, 0.8] # define bobot untuk alokasi dana
e_r_ind = test2.mean()
print(f"\n\tBobot expected return {namaSaham[0]} dengan {namaSaham[1]} \n",e_r_ind)

# Total expected return
e_r = np.dot(e_r_ind, bobot).sum()
print(f"\n\tTotal expected return saham {namaSaham[0]} dan {namaSaham[1]} \n", e_r)

