import numpy as np
import matplotlib.pyplot as plt
import pandas as pd

# mengakses data saham
DataHargaAPLN = r'D:\LATIHAN PEMROGRAMAN\SISTEM OPTIMASI\DATA_HARGA_SAHAM\APLN_JK_Cleansing.xlsx'
DataHargaASRI = r'D:\LATIHAN PEMROGRAMAN\SISTEM OPTIMASI\DATA_HARGA_SAHAM\ASRI_JK_Cleansing.xlsx'
DataHargaCTRA = r'D:\LATIHAN PEMROGRAMAN\SISTEM OPTIMASI\DATA_HARGA_SAHAM\CTRA_JK_Cleansing.xlsx'
DataHargaPWON = r'D:\LATIHAN PEMROGRAMAN\SISTEM OPTIMASI\DATA_HARGA_SAHAM\PWON_JK_Cleansing.xlsx'
DataHargaSMRA = r'D:\LATIHAN PEMROGRAMAN\SISTEM OPTIMASI\DATA_HARGA_SAHAM\SMRA_JK_Cleansing.xlsx'

# fungsi untuk membaca file excel
SahamAPLN = pd.read_excel(DataHargaAPLN)
SahamASRI = pd.read_excel(DataHargaASRI)
SahamCTRA = pd.read_excel(DataHargaCTRA)
SahamPWON = pd.read_excel(DataHargaPWON)
SahamSMRA = pd.read_excel(DataHargaSMRA)

# method untuk menampilkan harga saham
def DisplayHargaSaham():
    print(SahamAPLN, "\n")
    print(SahamASRI, "\n")
    print(SahamCTRA, "\n")
    print(SahamPWON, "\n")
    print(SahamSMRA, "\n")




