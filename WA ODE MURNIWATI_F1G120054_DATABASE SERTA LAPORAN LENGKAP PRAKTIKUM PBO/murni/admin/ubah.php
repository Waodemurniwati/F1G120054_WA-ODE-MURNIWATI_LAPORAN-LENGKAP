<?php 
require 'functions.php';

//ambil data di url
//query data mahasiswa berdasarkan id
// var_dump($member[0]["nama"]);
$id=$_GET['id'];
$pemilik_kos=query("SELECT * FROM pemilik_kos WHERE id=$id")[0];
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
if (isset($_POST["kembali"])) {
	header('Location:index.php');
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Ubah Data</title>
	<link rel=stylesheet href="style.css">
</head>
<body>
<section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
		<form action="" method="post" class="form-container">
                <h4 class="text-center font-weight-bold"> Ubah  Data </h4>
		<input type="hidden" name="id" value="<?= $member["id"]; ?>">
    	<label for="nama">&nbspNama</label>
    	<input type="text" class="form-control" name="nama_pemilik" id ="nama_pemilik" value="<?= $member["nama_pemilik"]; ?>">
    	<label for="Biaya kamar">&nbspBiaya kamar</label>
    	<input type="text" class="form-control" name="Biaya kamar" id="Biaya kamar" value="<?= $member["Biaya kamar"]; ?>">
    	<label for="no_hp">&nbspNo Telepon</label>
    	<input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $member["no_hp"]; ?>">
	    <label for="id_kamar">&nbspID_kamar</label>
	    <input type="text" class="form-control" name="id_kamar" id="id_kamar" value="<?= $member["id_kamar"]; ?>">
    	<label for="Alamat">&nbspAlamat</label>
    	<input type="text" class="form-control" name="Alamat" id="Alamat" value="<?= $member["Alamat"]; ?>">
	    	<?php  
	    	$sql="SELECT * FROM golongan";
	    	$hasil=mysqli_query($koneksi,$sql);
	    	$no=0;
	    	while ($data=mysqli_fetch_array($hasil)) {
	    	   $no++;
	    	?>
	    </select>
	    <br>
	    <button class="btn btn-success"type="submit" name="submit">Ubah Data</button>
		<button class="btn btn-danger" name="kembali">Kembali</button>
		</form> 
		 </section>
        </section>
    </section>
</body>
</html>