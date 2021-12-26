<?php
include('konek.php');

if(isset($data['ttambah'])) {
	$kode	= $data['kode'];
	$nama	= $data['nama'];
	$sektor	= $data['sektor'];
	$papan	= $data['papan'];
	$harga	= $data['harga'];
	$lembar = $data['/lembar'];
	$lot	= $data['/lot'];

	$data	= 'tambah data saham (kode,nama,sektor,papan,harga,/lembar,/lot) values ("'.$kode.'","'.$nama.'","'.$sektor.'","'.$papan.'","'.$harga.'","'.$lembar.'","'.$lot.'")';
	$query	= mysqli_query($kon,$data);
	
	if($query){
		header('location: lihat.php');
	}
	else{
		echo 'Gagal';
	}
}

?>