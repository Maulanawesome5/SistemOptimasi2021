# Cara mencari jumlah lot berdasarkan alokasi bobot
# Yang harus diketahui adalah : 
# 1. Jumlah modal awal
# 2. Bobot alokasi (dalam persen)
# 3. Harga saham terakhir closing

modal_awal = 500000000 # 500 juta
bobot_alokasi = 0.12 # 0.12 == 12%
nama_saham = "BBCA"
harga_terakhir = 7300 # Harga saham perlembar
satu_lot_saham = 100 # 1 lot == 100 lembar saham
print(f"\nModal awal yang dimiliki sejumlah Rp.{modal_awal}. \
Saya berencana membeli saham {nama_saham} pada harga Rp.{harga_terakhir} \
\nSaya mengambil sebanyak 12% dari jumlah modal awal. Maka saya bisa membeli :")

# ========== Dummy program ==========
# Mencari jumlah uang yang dialokasi untuk satu saham
# berdasarkan persentase bobot
jumlah_alokasi = modal_awal * bobot_alokasi
print(modal_awal, "x", bobot_alokasi, "= Rp.", jumlah_alokasi)
print("Jumlah modal yang dialokasi Rp.", jumlah_alokasi)

# Mencari jumlah lot yang bisa dibeli dengan modal
# yang telah dialokasikan sebelumnya
print(f"\nSekarang saya harus menyiapkan Rp. {jumlah_alokasi} dari total Rp.{modal_awal}.\
 Namun berapa lot yang bisa saya beli dengan uang tersebut?")
jumlah_lot = jumlah_alokasi / harga_terakhir
lot_int = int(jumlah_lot / 100)
print(int(jumlah_alokasi), "/", harga_terakhir, "=", jumlah_lot)
print("Jumlah lot yang bisa dibeli =", lot_int)

# Menghitung total uang yang digunakan untuk membeli satu saham
# berdasarkan jumlah lot yang telah dihitung sebelumnya
total_pembelian = (harga_terakhir * satu_lot_saham) * int(lot_int)
print(f"\nJadi saya harus membeli saham {nama_saham} pada harga {harga_terakhir} sebanyak {lot_int} lot")
print(f"Total membeli saham {nama_saham} pada harga {harga_terakhir} sebanyak {lot_int} adalah Rp.", total_pembelian)


# Uang yang masih dimiliki setelah membeli 82 lot BBCA
uang_sisa = modal_awal - total_pembelian
print(f"\n\nDeposit awal Rp. {modal_awal}.\n\
Histori pembelian saham : \n\
\t{nama_saham} {harga_terakhir} @ {lot_int} = Rp. {total_pembelian}\
\nSisa deposit Rp. {uang_sisa}")


