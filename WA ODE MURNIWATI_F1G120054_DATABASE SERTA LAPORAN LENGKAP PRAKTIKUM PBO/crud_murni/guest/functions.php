<?php 
//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","crud_danone");

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
	$nama=$data["nama"];
	$kode_member=$data["kode_member"];
	$no_hp=$data["no_hp"];
	$email=$data["email"];
	$jenis_kelamin=$data["jenis_kelamin"];
	$id_golongan=htmlspecialchars($data["id_golongan"]);
	$q1 = "UPDATE member SET nama = '$nama', kode_member = '$kode_member', no_hp = '$no_hp', email = '$email', jenis_kelamin = '$jenis_kelamin', id_golongan = '$id_golongan' WHERE member.id = $id;";
	mysqli_query($koneksi,$q1);

	return mysqli_affected_rows($koneksi);
}

 ?>