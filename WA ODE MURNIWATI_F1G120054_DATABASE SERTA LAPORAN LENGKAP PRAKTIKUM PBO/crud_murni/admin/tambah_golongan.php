<?php 
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

	//cek apakah data berhasil di tambahkan atau tidak
	if(tambah_golongan($_POST)>0){
		echo "<script>alert('Golongan berhasil ditambahkan!');
		</script>";
	}else{
		echo "<script>alert('Golongan gagal ditambahkan!');
		document.location.href='index.php';
		</script>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Golongan</title>
</head>
<body>
<h1>Tambah Golongan Baru</h1>

<form action="" method="post">
	<ul>
	    <li>
	    	<label for="id_golongan">Id Golongan : </label>
	    	<input type="text" name="id_golongan" id ="id_golongan" required>
	    </li>
	    <li>
	    	<label for="nama_golongan">Nama Golongan:</label>
	    	<input type="text" name="nama_golongan" id="nama_golongan" >
	    </li>
	    <li><button type="submit" name="submit">Tambah Golongan</button></li>
	</ul>
</form>
<br><br>
<a href="index.php">Kembali</a>
</body>
</html>