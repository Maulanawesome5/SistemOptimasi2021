# Load Package
import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
from openpyxl import Workbook

# Load Data
dirSaham = r'D:/LATIHAN PEMROGRAMAN/SISTEM OPTIMASI/PRICE DATA/APLN.JK.xlsx'
saham1 = pd.read_excel(dirSaham)
# print(saham1) # Display file excel saham