import tkinter as tk
from tkinter.constants import W
from typing_extensions import IntVar

window = tk.Tk() # Membuat variabel yang bernama window, tk.Tk() adalah top level widget
window.title('INVESTASI SAHAM') # Memberikan judul pada window aplikasi
window.geometry('500x200') # Mengatur ukuran jendela aplikasi (dalam pixel)

frame1 = tk.Frame(master=window) # Membuat frame untuk grouping
# Relief digunakan untuk menentukan style, bisa diganti FLAT, RAISED, SUNKEN, GROOVE, RIDGE
frame1['relief'] = tk.GROOVE
frame1['borderwidth'] = 1
frame1.pack(side=tk.LEFT, fill=tk.Y) # Menentukan posisi frame di sebelah kiri jendela

frame2 = tk.Frame(master=window)
# Relief digunakan untuk menentukan style, bisa diganti FLAT, RAISED, SUNKEN, GROOVE, RIDGE
frame2['relief'] = tk.RIDGE
frame2.pack(side=tk.RIGHT) # Menentukan posisi frame di sebelah kanan jendela

list = {
    0 : 'Nama Lengkap',
    1 : 'NIM',
    2 : 'Tanggal Lahir',
    3 : 'Program Studi',
    4 : 'Jurusan'
}

i = 4

for i in list:
    label = tk.Label(master=frame1)
    label['text'] = list[i], ':'
    label.grid(row=i, column=0, sticky=tk.W)

    entry = tk.Entry(master=frame2)
    entry['width'] = 50
    entry.grid(row=i, column=1, sticky=tk.W)
    i = i+1

    la = tk.Label(master=frame1)
    la['text'] = 'Sex : '
    la.grid(row=10, column=0, sticky=tk.W)
    va = tk.IntVar()
    ra1 = tk.Radiobutton(master=frame2, text='Pria', variable=va, value=1)
    ra1.grid(row=10, column=0, sticky=tk.W)

    ra2 = tk.Radiobutton(master=frame2, text='Wanita', variable=va, value=2)
    ra2.grid(row=10, column=1, sticky=tk.W)

button1 = tk.Button(master=frame2)
button1['text'] = 'Submit'
button1.grid(row=11, column=0, sticky=tk.W)

button2 = tk.Button(master=frame2)
button2['text'] = 'Batal'
button2.grid(row=11, column=1, sticky=tk.W)

window.mainloop()

