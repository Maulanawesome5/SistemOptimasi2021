import pandas_datareader as web
from Saham import dataFrame

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


apln = Saham()

# End program