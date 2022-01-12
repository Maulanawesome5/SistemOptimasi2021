# Percobaan menguji 2 emiten untuk membangun aplikasi GUI
# Step 1 - Memilih kode saham secara hardcoded, membaca historis harga dengan
#          menggunakan method DataReader()

from pandas_datareader import data
import datetime as dt

tanggal_awal = input('Input tanggal awal (2020/01/30):')
tanggal_akhir = input('Input tanggal akhir (2021/12/30):')

# nama_saham = ['APLN.JK', 'ASRI.JK'] # Membuat list berisi kode saham
# data_frame = data.DataReader(nama_saham, 'yahoo', start='2020/01/10', end='2022/01/10')
# print(data_frame)
# print(type(data_frame))

print(tanggal_awal, type(tanggal_awal))
print(tanggal_akhir, type(tanggal_akhir))
