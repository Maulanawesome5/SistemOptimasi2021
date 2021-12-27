<?php
//include('./config/konek.php'); 
//$sql  = 'SELECT * FROM tabmahasiswa';
//$query    = mysqli_query($db_link,$sql);
?>

<html>
<head>
    <title>Sistem Optimasi</title>
    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
    </style>
</head>

<body>
    <body bgcolor="#CCCCCC">
</body>

<center>

    <tr>
    <div class="judul">     
        <h1>FORM INPUT SAHAM</h1>
        <h2>Investasi Saham</h2>
    </div>
    </tr>

<center>
    <tr>
    <td>Jumlah Investasi : </td>
    <td><input type="text" name="nama"></td>
    </tr>           
</center>

<tr height="46">
<td>Sektor : </td>
<td><select name="jurusan">
    <option value="-">--- Sektor ---
    <option value="APLN.JK">Property:APLN.JK
    <option value="ASRI.JK">Property:ASRI.JK
    <option value="CTRA.JK">Property:CTRA.JK
    <option value="PWON.JK">Property:PWON.JK
    <option value="SMRA.JK">Property:SMRA.JK
    </select></td>
    </tr>

<tr height="46">
<td>Sub Sektor : </td>
<td><select name="jurusan">
    <option value="-">- Sub Sektor -
    <option value="APLN.JK">Real Estate:APLN.JK
    <option value="ASRI.JK">Real Estate:ASRI.JK
    <option value="CTRA.JK">Real Estate:CTRA.JK
    <option value="PWON.JK">Real Estate:PWON.JK
    <option value="SMRA.JK">Real Estate:SMRA.JK
    </select></td>
    </tr>


<form>
<td>Start :</td>
<input type="date" name="day" max="2021-12-31">
<td>Close :</td>
<input type="date" name="day" min="2021-12-31">
</form>

<tr height="46">
<td>Emiten : </td>
<td><select name="jurusan">
    <option value="-">- Emiten -
    <option value="APLN.JK">Agung Podomoroland Tbk
    <option value="ASRI.JK">Alam Sutera Realty Tbk
    <option value="CTRA.JK">Ciputra World Development Tbk
    <option value="PWON.JK">Pakuwon Jati Tbk
    <option value="SMRA.JK">Sumareccon Agung Tbk
    </select></td>
    </tr>
    <span class="form-label-announcement">Papan</span>
    <select name="board" id="boardList" class="form-input form-input--block select2-js select2-hidden-accessible" tabindex="-1" aria-hidden="true"></select>
    <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 980.8px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-boardList-container"><span class="select2-selection__rendered" id="select2-boardList-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    <span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-boardList-container"><span class="select2-selection__rendered" id="select2-boardList-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span>
    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-boardList-container"><span class="select2-selection__rendered" id="select2-boardList-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span>
    <span class="select2-selection__rendered" id="select2-boardList-container"></span>
    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
    <b role="presentation"></b>
    </span>
    </span>
    </span>
</center>
        
        <center>
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit">   
            <a href="input.php"><input type="reset" name="reset" value="Reset"></td>
        </tr>
        </center>
        
<body>
<a href="input.php" >Kembali Ke Data</a>
<center>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
    <table border="1">
        <thead>
            <tr>
                <td rowspan="1">No</td>
                <td rowspan="2">kode</td>
                <td rowspan="3">Nama</td>
                <td rowspan="4">sektor</td>
                <td rowspan="5">papan</td>
                <th rowspan ="6">Harga</th>
                <th rowspan ="7">/lembar</th>
                <th rowspan ="8">/lot</th>
            </tr>
        </thead>
        <?php
        include "konek.php";
        $no = 1;
        $kon = mysqli_query($kon, 'SELECT * FROM user');
        while ($data = mysqli_fetch_array($kon)) {
        ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['kode'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['sektor'] ?></td>
                <td><?php echo $data['papan'] ?></td>
                <th><?php echo $data['harga'] ?></th>
                <th><?php echo $data['/lembar'] ?></th>
                <th><?php echo $data['/lot'] ?></th>
            </tr>
        
        <?php } ?>

    </table>
</body>
</center>
</html>