import numpy as np
import matplotlib.pyplot as plt
import pandas as pd
import datetime as dt


class Saham:
    # Deklarasi variabel waktu
    start = dt.datetime
    end = dt.datetime.now()

    # Direktori data, bertipe data string
    data_loc = r'D:\LATIHAN PEMROGRAMAN\SISTEM OPTIMASI\DATA_HARGA_SAHAM'

    ticker_saham = data_loc + r'\file.xlsx'

    def __init__(self, ticker, time, directory):
        self.ticker_saham = ticker
        self.start_time = time
        self.directory = directory


# Instance / object saham
apln_jk = Saham('APLN.JK')
print(apln_jk)

