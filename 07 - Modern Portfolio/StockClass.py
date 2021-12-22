import pandas_datareader as web
# from Saham import dataFrame
from tabulate import tabulate # Pip install tabulate

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

class Saham:
    index_nomor = 1
    
    def __init__(self, sektor, subsektor, tickerSaham, hargaSaham):
        self.__Sektor = sektor
        self.__SubSektor = subsektor
        self.__TickerSaham = tickerSaham
        self.__HargaSaham = hargaSaham

    def SektorEmiten(self):
        return self.__Sektor
    
    def SubSektorEmiten(self):
        return self.__SubSektor
    
    def TickerSaham(self):
        return self.__TickerSaham
    
    def HargaSaham(self):
        return self.__HargaSaham

    def DisplaySaham(self):
        DisplayTable = [['Sektor', 'Subsektor', 'Kode Saham', 'Harga Saham'],
        [self.__Sektor, self.__SubSektor, self.__TickerSaham, self.__HargaSaham]]
        print(tabulate(DisplayTable))


apln = Saham("Property", "Real Estate", "APLN.JK", 123)
asri = Saham("Property", "Real Estate", "ASRI.JK", 163)

asri.DisplaySaham()










# End program