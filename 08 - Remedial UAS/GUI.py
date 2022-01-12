import tkinter as tk
from tkinter.constants import CASCADE, GROOVE, RAISED, RIGHT

# Membuat top widget
top_widget = tk.Tk()
top_widget.title('Optimasi Portofolio Saham') # Judul window
top_widget.geometry('720x480') # Dalam satuan pixel


# Membuat menu bar
menuBar = tk.Menu(top_widget)
top_widget.config(menu=menuBar)
filemenu = tk.Menu(menuBar)
menuBar.add_cascade(label='File', menu=filemenu)
filemenu.add_command(label='New')
filemenu.add_command(label='Open...')
filemenu.add_separator()
filemenu.add_command(label='Exit', command=top_widget.quit)
helpmenu = tk.Menu(menuBar)
menuBar.add_cascade(label='Help', menu=helpmenu)
helpmenu.add_command(label='About')


# Membuat label
jumlah_invest = tk.Label(
    master=top_widget,
    text='Jumlah Investasi',
    padx=10,
    pady=10
)
jumlah_invest.grid(row=0, column=0, sticky=tk.W)

label_sektor = tk.Label(
    master=top_widget,
    text='Sektor',
    padx=10,
    pady=10
)
label_sektor.grid(row=1, column=0, sticky=tk.W)

label_emiten = tk.Label(
    master=top_widget,
    text='Emiten',
    padx=10,
    pady=10
)
label_emiten.grid(row=2, column=0, sticky=tk.W)

# Membuat entry dan selection box
nilai_invest = tk.Entry(master=top_widget, width=50)
nilai_invest.grid(row=0, column=1, sticky=tk.W)


# Membuat listbox untuk sektor emiten
sektor = tk.Listbox(master=top_widget)
sektor.insert(1, 'Barang Baku')
sektor.insert(2, 'Energi')
sektor.insert(3, 'Infrastruktur')
sektor.insert(4, 'Keuangan')
sektor.insert(5, 'Kesehatan')
sektor.insert(6, 'Non-Primer')
sektor.insert(7, 'Perindustrian')
sektor.insert(8, 'Primer')
sektor.insert(9, 'Properti')
sektor.insert(10, 'Teknologi')
sektor.insert(11, 'Transportasi')
sektor.grid(row=1, column=1, sticky=tk.W)


# Membuat listbox untuk kode saham
kode_saham = tk.Listbox(master=top_widget)
kode_saham.insert(1, 'APLN.JK')
kode_saham.insert(2, 'ASRI.JK')
kode_saham.insert(3, 'CTRA.JK')
kode_saham.insert(4, 'PWON.JK')
kode_saham.insert(5, 'SMRA.JK')
kode_saham.grid(row=2, column=1, sticky=tk.W)

# Menampilkan seluruh window aplikasi
top_widget.mainloop()