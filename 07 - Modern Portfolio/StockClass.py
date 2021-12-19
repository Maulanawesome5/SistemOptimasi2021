import numpy as np
import matplotlib.pyplot as plt
import pandas as pd
import datetime as dt

# class Saham:
#     def __init__(self, dir):
#         self.directory = dir
#         pass


# Deklarasi variabel waktu
start = dt.datetime
end = dt.datetime.now()

# Direktori data, bertipe data string
data_loc = r'D:\LATIHAN PEMROGRAMAN\SISTEM OPTIMASI\DATA_HARGA_SAHAM\APLN_JK_Cleansing.xlsx'

# Read file harga saham
data_saham = pd.read_excel(data_loc, sheet_name='APLN.JK')

# Instance / object saham
apln_jk = data_saham
print(apln_jk)

# read_excel(filepath: str, sheet_name: List[str] | None, header: int | Sequence[int] | None = ...,
#            names: Sequence[str] | None = ..., index_col: int | Sequence[int] | None = ..., 
#            usecols: int | str | Sequence[int | str | (*args, **kwargs) -> Any] | None = ...,
#            squeeze: bool = ..., dtype: str | Dict[str, Any] | Dtype@read_excel = ..., engine: str | None = ..., 
#            converters: Dict[int | str, (*args, **kwargs) -> Any] | None = ..., 
#            true_values: Sequence[Scalar] | None = ..., false_values: Sequence[Scalar] | None = ...,
#            skiprows: Sequence[int] | int | (*args, **kwargs) -> Any | None = ..., nrows: int | None = ...,
#            na_values=..., keep_default_na: bool = ..., verbose: bool = ..., 
#            parse_dates: bool | Sequence | Dict[str, Sequence] = ..., date_parser: (*args, **kwargs) -> Any | None = ...,
#            thousands: str | None = ..., comment: str | None = ..., skipfooter: int = ..., convert_float: bool = ...,
#            mangle_dupe_cols: bool = ...) -> Dict[str, DataFrame]

# read_excel(filepath: str, sheet_name: List[int], header: int | Sequence[int] | None = ...,
#            names: Sequence[str] | None = ..., index_col: int | Sequence[int] | None = ...,
#            usecols: int | str | Sequence[int | str | (*args, **kwargs) -> Any] | None = ..., squeeze: bool = ...,
#            dtype: str | Dict[str, Any] | Dtype@read_excel = ..., engine: str | None = ...,
#            converters: Dict[int | str, (*args, **kwargs) -> Any] | None = ..., true_values: Sequence[Scalar] | None = ...,
#            false_values: Sequence[Scalar] | None = ..., skiprows: Sequence[int] | int | (*args, **kwargs) -> Any | None = ...,
#            nrows: int | None = ..., na_values=..., keep_default_na: bool = ..., verbose: bool = ...,
#            parse_dates: bool | Sequence | Dict[str, Sequence] = ..., date_parser: (*args, **kwargs) -> Any | None = ...,
#            thousands: str | None = ..., comment: str | None = ..., skipfooter: int = ..., convert_float: bool = ...,
#            mangle_dupe_cols: bool = ...) -> Dict[int, DataFrame]

# read_excel(filepath: str, sheet_name: List[int | str], header: int | Sequence[int] | None = ...,
#            names: Sequence[str] | None = ..., index_col: int | Sequence[int] | None = ...,
#            usecols: int | str | Sequence[int | str | (*args, **kwargs) -> Any] | None = ...,
#            squeeze: bool = ..., dtype: str | Dict[str, Any] | Dtype@read_excel = ...,
#            engine: str | None = ..., converters: Dict[int | str, (*args, **kwargs) -> Any] | None = ...,
#            true_values: Sequence[Scalar] | None = ..., false_values: Sequence[Scalar] | None = ...,
#            skiprows: Sequence[int] | int | (*args, **kwargs) -> Any | None = ...,
#            nrows: int | None = ..., na_values=..., keep_default_na: bool = ..., verbose: bool = ...,
#            parse_dates: bool | Sequence | Dict[str, Sequence] = ..., date_parser: (*args, **kwargs) -> Any | None = ...,
#            thousands: str | None = ..., comment: str | None = ..., skipfooter: int = ...,
#            convert_float: bool = ..., mangle_dupe_cols: bool = ...) -> Dict[int | str, DataFrame]

# read_excel(filepath: str, sheet_name: int | str = ..., header: int | Sequence[int] | None = ..., names: Sequence[str] | None = ..., index_col: int | Sequence[int] | None = ..., usecols: int | str | Sequence[int | str | (*args, **kwargs) -> Any] | None = ..., squeeze: bool = ..., dtype: str | Dict[str, Any] | Dtype@read_excel = ..., engine: str | None = ..., converters: Dict[int | str, (*args, **kwargs) -> Any] | None = ..., true_values: Sequence[Scalar] | None = ..., false_values: Sequence[Scalar] | None = ..., skiprows: Sequence[int] | int | (*args, **kwargs) -> Any | None = ..., nrows: int | None = ..., na_values=..., keep_default_na: bool = ..., verbose: bool = ..., parse_dates: bool | Sequence | Dict[str, Sequence] = ..., date_parser: (*args, **kwargs) -> Any | None = ..., thousands: str | None = ..., comment: str | None = ..., skipfooter: int = ..., convert_float: bool = ..., mangle_dupe_cols: bool = ..., **kwargs) -> DataFrame
