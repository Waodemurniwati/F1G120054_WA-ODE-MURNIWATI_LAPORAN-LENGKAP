<?php 
//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","crud_murni");

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

	$id=htmlspecialchars($data["id"]);
	$nama_pemilik=htmlspecialchars($data["nama_pemilik"]);
	$Biaya_kamar=htmlspecialchars($data["Biaya_kamar"]);
	$no_hp=htmlspecialchars($data["no_hp"]);
	$id_kamar=htmlspecialchars($data["id_kamar"]);
	$Alamat=htmlspecialchars($data["Alamat"]);

	$q1 = "INSERT INTO pemilik_kos values('','$id','$nama_pemilik','$Biaya_kamar','$no_hp','$id_kamar','$Alamat')";
	mysqli_query($koneksi,$q1);

	return mysqli_affected_rows($koneksi);
}

function tambah_kamar_kos($data2)	{
	global $koneksi;
	$id_kamar=htmlspecialchars($data2["id_kamar"]);
	$Tipe_kamar =htmlspecialchars($data2["Tipe_kamar"]);
	$fasilitas=htmlspecialchars($data2["fasilitas"]);
	$sistem_pembayaran=htmlspecialchars($data2["sistem_pembayaran"]);


	$q1 = "INSERT INTO kamar_kos values('$id_kamar','$Tipe_kamar','$fasilitas','$sistem_pembayaran')";
	mysqli_query($koneksi,$q1);

	return mysqli_affected_rows($koneksi);

}

function tambah_penyewa_kost($data3)	{
	global $koneksi;
	$No_ktp=htmlspecialchars($data3["No_ktp"]);
	$Nama_penyewa=htmlspecialchars($data3["Nama_penyewa"]);
	$No_hp=htmlspecialchars($data3["No_hp"]);
	$Kesanggupan_membayar=htmlspecialchars($data3["Kesanggupan_membayar"]);


	$q1 = "INSERT INTO penyewa_kost values('$No_ktp','$Nama_penyewa','$No_hp','$Kesanggupan_membayar')";
	mysqli_query($koneksi,$q1);

	return mysqli_affected_rows($koneksi);

}

// function hapus($id) {
// 	global $koneksi;
// 	mysqli_query($koneksi, "DELETE FROM member WHERE id = $id");
// 	return mysqli_affected_rows($koneksi);
// }

// function ubah($data){
// 	global $koneksi;
// 	$id=$data["id"];
// 	$nama=$data["nama"];
// 	$kode_member=$data["kode_member"];
// 	$no_hp=$data["no_hp"];
// 	$email=$data["email"];
// 	$jenis_kelamin=$data["jenis_kelamin"];
// 	$id_golongan=htmlspecialchars($data["id_golongan"]);
// 	// var_dump($id);
// 	// var_dump($nama);
// 	// var_dump($kode_member);
// 	// var_dump($no_hp);
// 	// var_dump($email);
// 	// var_dump($jenis_kelamin);
// 	// var_dump($id_golongan);
// 	$q1 = "UPDATE member SET nama = '$nama', kode_member = '$kode_member', no_hp = '$no_hp', email = '$email', jenis_kelamin = '$jenis_kelamin', id_golongan = '$id_golongan' WHERE member.id = $id;";
// 	mysqli_query($koneksi,$q1);

// 	return mysqli_affected_rows($koneksi);
// }
function pesan(){
	
 }
?>