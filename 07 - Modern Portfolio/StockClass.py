import pandas_datareader as web
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
    index_nomor = 0 #Nomor urut
    
    def __init__(self, sektor, subsektor, tickerSaham, hargaSaham):
        self.__Sektor = sektor
        self.__SubSektor = subsektor
        self.__TickerSaham = tickerSaham
        self.__HargaSaham = hargaSaham
    
    @property
    def SektorEmiten(self):
        pass
    
    @property
    def SubSektorEmiten(self):
        pass
    
    @property
    def TickerSaham(self):
        pass
    
    @property
    def HargaSaham(self):
        pass

    @SektorEmiten.getter
    def SektorEmiten(self):
        return self.__Sektor
    
    @SubSektorEmiten.getter
    def SubSektorEmiten(self):
        return self.__SubSektor
    
    @TickerSaham.getter
    def TickerSaham(self):
        return self.__TickerSaham
    
    @HargaSaham.getter
    def HargaSaham(self):
        return self.__HargaSaham
    
    # @classmethod
    def DisplaySaham(self):
        DisplayTable = [['Sektor', 'Subsektor', 'Kode Saham', 'Harga Saham'],
        [self.__Sektor, self.__SubSektor, self.__TickerSaham, self.__HargaSaham]]
        
        print(tabulate(DisplayTable))
        # print(self.SektorEmiten, self.SubSektorEmiten, self.TickerSaham, self.HargaSaham)


apln = Saham("Properti", "Real Estate", "APLN.JK", 123)
asri = Saham("Properti", "Real Estate", "ASRI.JK", 163)
ctra = Saham("Properti", "Real Estate", "CTRA.JK", 990)

apln.DisplaySaham()
asri.DisplaySaham() 
ctra.DisplaySaham() # Class Method




# End program