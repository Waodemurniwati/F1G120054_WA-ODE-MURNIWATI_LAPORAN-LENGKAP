<?php 
require 'functions.php';

//ambil data di url
//query data mahasiswa berdasarkan id
// var_dump($member[0]["nama"]);
$id=$_GET['id'];
$member=query("SELECT * FROM member WHERE id=$id")[0];
if(isset($_POST["submit"])){

//cek apakah tombol submit sudah ditekan atau belum
	//cek apakah data berhasil di ubah atau tidak
	if(ubah($_POST)>0){
		echo "<script>alert('Data berhasil diubah!')
		document.location.href = 'index.php';
		</script>";
	}else{
		echo "<script>alert('Data gagal diubah!')
		document.location.href = 'index.php';
		</script>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
<h1>Ubah Data</h1>

<form action="" method="post">
	<ul>
		<input type="hidden" name="id" value="<?= $member["id"]; ?>">
	    <li>
	    	<label for="nama">Nama : </label>
	    	<input type="text" name="nama" id ="nama" value="<?= $member["nama"]; ?>">
	    </li>
	    <li>
	    	<label for="kode_member">Kode Member:</label>
	    	<input type="text" name="kode_member" id="kode_member" value="<?= $member["kode_member"]; ?>">
	    </li>
	    <li>
	    	<label for="no_hp">No Telepon:</label>
	    	<input type="text" name="no_hp" id="no_hp" value="<?= $member["no_hp"]; ?>">
	    </li>
	    <li>
	    <label for="email">Email:</label>
	    <input type="text" name="email" id="email" value="<?= $member["email"]; ?>">
	    </li>
	    <li>
	    	<label for="jenis_kelamin">Jenis Kelamin:</label>
	    	<input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?= $member["jenis_kelamin"]; ?>">
	    </li>
	    <li>
	    	<label for="golongan">Nama Golongan :</label>
	    <select name="id_golongan">
	    	<?php  
	    	$hasil=mysqli_query($koneksi,"SELECT * FROM golongan");
	    	$no=0;
	    	while ($data=mysqli_fetch_array($hasil)) {
	    	   $no++;
	    	?>
	    	<option value="<?= $data["id_golongan"]; ?>"><?= $data["nama_golongan"]; ?>
	    	</option>
			<?php } ?>
	    </select>
	    </li>
	    <li><button type="submit" name="submit">Ubah Data</button></li>
	</ul>
</form>
<br><br>
<a href="index.php">Kembali</a>
</body>
</html>