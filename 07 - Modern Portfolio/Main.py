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
