<?php 
//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","crud_murni");

function akses(){
session_start();
 
if(!isset($_SESSION['guest'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../index.php";</script>';
}
}

function query($query){
	global $koneksi;
	$lemari = mysqli_query($koneksi, $query);
	$wadah=[];
	while ($baju = mysqli_fetch_assoc($lemari)){
		$wadah[]=$baju;
	}
	return $wadah;
}
function ubah($data){
	global $koneksi;
	$id=$data["id"];
	$nama_pemilik=$data["nama_pemilik"];
	$Biaya_kamar=$data["Biaya_kamar"];
	$no_hp=$data["no_hp"];
	$id_kamar=htmlspecialchars($data["id_kamar"]);
	$Alamat=$data["Alamat"];
	$q1 = "UPDATE pemilik_kos SET nama_pemilik = '$nama_pemilik', Biaya_kamar = '$Biaya_kamar', no_hp = '$no_hp', id_kamar = '$id_kamar', Alamat = '$Alamat' WHERE pemilik_kos.id = $id;";
	mysqli_query($koneksi,$q1);

	return mysqli_affected_rows($koneksi);
}

 ?>