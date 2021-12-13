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
    print(15*"=", "APLN", 15*"=", "\n", SahamAPLN, "\n")
    print(15*"=", "ASRI", 15*"=", "\n", SahamASRI, "\n")
    print(15*"=", "CTRA", 15*"=", "\n", SahamCTRA, "\n")
    print(15*"=", "PWON", 15*"=", "\n", SahamPWON, "\n")
    print(15*"=", "SMRA", 15*"=", "\n", SahamSMRA, "\n")

# Memilih tabel closing
hargaClosingAPLN = SahamAPLN['Close']
hargaClosingASRI = SahamASRI['Close']
hargaClosingCTRA = SahamCTRA['Close']
hargaClosingPWON = SahamPWON['Close']
hargaClosingSMRA = SahamSMRA['Close']

# Log persentase perubahan
APLN = hargaClosingAPLN.pct_change().apply(lambda x: np.log(1+x))
ASRI = hargaClosingASRI.pct_change().apply(lambda x: np.log(1+x))
CTRA = hargaClosingCTRA.pct_change().apply(lambda x: np.log(1+x))
PWON = hargaClosingPWON.pct_change().apply(lambda x: np.log(1+x))
SMRA = hargaClosingSMRA.pct_change().apply(lambda x: np.log(1+x))

# Variance
variance_apln = APLN.var()
variance_asri = ASRI.var()
variance_ctra = CTRA.var()
variance_pwon = PWON.var()
variance_smra = SMRA.var()

# Volatility
volatil_apln = np.sqrt(variance_apln * 250)
volatil_asri = np.sqrt(variance_asri * 250)
volatil_ctra = np.sqrt(variance_ctra * 250)
volatil_pwon = np.sqrt(variance_pwon * 250)
volatil_smra = np.sqrt(variance_smra * 250)

# Volatility kelima saham
hargaClosingAPLN.pct_change().apply(lambda x: np.log(1+x)).std().apply(lambda x: x*np.sqrt(250)).plot(kind='bar')
hargaClosingASRI.pct_change().apply(lambda x: np.log(1+x)).std().apply(lambda x: x*np.sqrt(250)).plot(kind='bar')
hargaClosingCTRA.pct_change().apply(lambda x: np.log(1+x)).std().apply(lambda x: x*np.sqrt(250)).plot(kind='bar')
hargaClosingPWON.pct_change().apply(lambda x: np.log(1+x)).std().apply(lambda x: x*np.sqrt(250)).plot(kind='bar')
hargaClosingSMRA.pct_change().apply(lambda x: np.log(1+x)).std().apply(lambda x: x*np.sqrt(250)).plot(kind='bar')



