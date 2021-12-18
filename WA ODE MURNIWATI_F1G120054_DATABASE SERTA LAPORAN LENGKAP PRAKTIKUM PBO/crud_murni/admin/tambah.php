<?php 
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

	//cek apakah data berhasil di tambahkan atau tidak
	if(tambah($_POST)>0){
		echo "<script>alert('Data berhasil ditambahkan!');
		</script>";
	}else{
		echo "<script>alert('Data gagal ditambahkan!');
		</script>";
	}
}
	    		    	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Member</title>
</head>
<body>
<h1>Tambah Data Member</h1>

<form action="" method="post">
	<ul>
	    <li>
	    	<label for="nama">Nama : </label>
	    	<input type="text" name="nama" id ="nama" required>
	    </li>
	    <li>
	    	<label for="kode_member">Kode Member:</label>
	    	<input type="text" name="kode_member" id="kode_member" >
	    </li>
	    <li>
	    	<label for="no_hp">No Telepon:</label>
	    	<input type="text" name="no_hp" id="no_hp" required>
	    </li>
	    <li>
	    <label for="email">Email:</label>
	    <input type="text" name="email" id="email" required>
	    </li>
	    <li>
	    	<label for="jenis_kelamin">Jenis Kelamin:</label>
	    	<input type="text" name="jenis_kelamin" id="jenis_kelamin" required>
	    </li>
	    <li>
	    	<label for="golongan">Golongan :</label>
	    <select name="id_golongan">
	    	<?php  
	    	$sql="SELECT * FROM golongan";
	    	$hasil=mysqli_query($koneksi,$sql);
	    	$no=0;
	    	while ($data=mysqli_fetch_array($hasil)) {
	    	   $no++;
	    	?>
	    	<option value="<?= $data["id_golongan"]; ?>"><?= $data["nama_golongan"]; ?>
	    	</option>
			<?php } ?>
	    </select>
	    </li>
	    <li><button type="submit" name="submit">Tambah Data</button></li>
	</ul>
</form>
<br><br>
<a href="index.php">Kembali</a>
</body>
</html>