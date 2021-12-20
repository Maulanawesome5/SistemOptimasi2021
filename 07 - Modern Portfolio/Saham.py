import numpy as np
import matplotlib.pyplot as plt
import pandas as pd

# membuat raw string direktori file harga saham
lokasi_file = r'D:\LATIHAN PEMROGRAMAN\SISTEM OPTIMASI\DATA_HARGA_SAHAM'

# mengakses data saham
DataHargaAPLN = r'D:\LATIHAN PEMROGRAMAN\SISTEM OPTIMASI\DATA_HARGA_SAHAM\APLN_JK_Cleansing.xlsx'

# fungsi untuk membaca file excel
SahamAPLN = pd.read_excel(DataHargaAPLN)

# method untuk menampilkan harga saham
def DisplayHargaSaham():
    print(15*"=", "APLN", 15*"=", "\n", SahamAPLN, "\n")

# Memilih tabel closing
hargaClosingAPLN = SahamAPLN['Close']

# Log persentase perubahan
APLN = hargaClosingAPLN.pct_change().apply(lambda x: np.log(1+x))

# Variance
variance_apln = APLN.var()

# Volatility
volatil_apln = np.sqrt(variance_apln * 250)

# Volatility kelima saham
hargaClosingAPLN.pct_change().apply(lambda x: np.log(1+x)).std().apply(lambda x: x*np.sqrt(250)).plot(kind='bar')



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
