<?php 
require 'functions.php';

//ambil data di url
$id=$_GET['id'];
//query data mahasiswa berdasarkan id
$member=query("SELECT * FROM member WHERE id=$id")[0];
if(isset($_POST["submit"])){

//cek apakah tombol submit sudah ditekan atau belum
	//cek apakah data berhasil di ubah atau tidak
$id=$_GET['id'];
	if(ubah($_POST)>0){
		echo "<script>alert('Data berhasil diubah!')
		var id=$id;
		document.location.href = 'index.php?id='+ id;
		</script>";
	}else{
		echo "<script>alert('Data gagal diubah!')
		var id=$id;
		document.location.href = 'index.php?id='+ id;
		</script>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="container">
 		<h3 class ="text-center">Ubah Data</h3>
 			<hr>
		<form action="" method="post">
			<div class="form-group">
				<ul>
		<input type="hidden" name="id" value="<?= $member["id"]; ?>">
	    <li>
	    	<label for="nama">Nama : </label>
	    	<input type="text" name="nama" id ="nama" value="<?= $member["nama"]; ?>">
	    </li>
	</div>
	<div class="form-group">
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
	    <li><button type="submit" name="submit">Ubah Data</button></li>
	</ul>
		</form>
 	</div>
</body>
</html>