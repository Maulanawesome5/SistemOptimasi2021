"""
__________________________________________________________
Tabel Sektor | Tabel Subsektor | Tabel Saham | Tabel Harga
__________________________________________________________

Input :
1. Input Master -> Sektor, Subsektor, Kode Saham (mis. ASII, ACES, AGII...)
2. Input Investasi
3. Input Harga Beli
4. Input Kalkulasi
5. Transaksi

Output Tabel :
____________________________________________________________
No. | Ticker Saham | Nama Saham | Harga | Bobot | Jumlah Lot
____________________________________________________________
"""
# Import package
import tkinter as tk

# Membuat window aplikasi
main_window = tk.Tk()

# Membuat tombol dan label
label1 = tk.Label(main_window, text="Label 1")
label2 = tk.Label(main_window, text="Label 2")
tombol1 = tk.Button(main_window, text="Tombol 1")
tombol2 = tk.Button(main_window, text="Tombol 2")

# Method positioning
label1.pack()
label2.pack()
tombol1.pack()
tombol2.pack()

# Method untuk menampilkan window GUI
main_window.mainloop()
