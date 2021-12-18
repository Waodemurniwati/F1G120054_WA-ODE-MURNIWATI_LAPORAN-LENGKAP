<?php 
//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","crud_danone");

function akses(){
	session_start();

if(!isset($_SESSION['admin'])){
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
function tambah($data)	{
	global $koneksi;

	$id_user=htmlspecialchars($data["id_user"]);
	$nama_user=htmlspecialchars($data["nama_user"]);
	$Username=htmlspecialchars($data["Username"]);
	$Password=htmlspecialchars($data["Password"]);
	$level=htmlspecialchars($data["level"]);

	$q1 = "INSERT INTO member values('','$nama','$kode_member','$no_hp','$email','$jenis_kelamin','$id_golongan')";
	mysqli_query($koneksi,$q1);

	return mysqli_affected_rows($koneksi);
}

function tambah_golongan($data2)	{
	global $koneksi;
	$id_golongan=htmlspecialchars($data2["id_golongan"]);
	$nama_golongan=htmlspecialchars($data2["nama_golongan"]);

	$q1 = "INSERT INTO golongan values('$id_golongan','$nama_golongan')";
	mysqli_query($koneksi,$q1);

	return mysqli_affected_rows($koneksi);

}

function hapus($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM member WHERE id = $id");
	return mysqli_affected_rows($koneksi);
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
	// var_dump($id);
	// var_dump($nama);
	// var_dump($kode_member);
	// var_dump($no_hp);
	// var_dump($email);
	// var_dump($jenis_kelamin);
	// var_dump($id_golongan);
	$q1 = "UPDATE member SET nama = '$nama', kode_member = '$kode_member', no_hp = '$no_hp', email = '$email', jenis_kelamin = '$jenis_kelamin', id_golongan = '$id_golongan' WHERE member.id = $id;";
	mysqli_query($koneksi,$q1);

	return mysqli_affected_rows($koneksi);
}

 ?>