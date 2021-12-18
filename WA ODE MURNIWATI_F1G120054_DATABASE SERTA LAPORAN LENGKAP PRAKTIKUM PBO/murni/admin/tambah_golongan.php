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
if (isset($_POST["kembali"])) {
	header('Location:index.php');
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Golongan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
		<form action="" method="post" class="form-container">
                <h4 class="text-center font-weight-bold"> Tambah Golongan Baru</h4>
    	<label for="id_golongan">&nbspId Golongan</label>
    	<input type="text" class="form-control" name="id_golongan" id ="id_golongan">
    	<label for="nama_golongan">&nbspNama Golongan</label>
    	<input type="text" class="form-control" name="nama_golongan" id="nama_golongan" ><br>
	    <button class="btn btn-success" type="submit" name="submit">Tambah golongan</button>
		<button class="btn btn-danger" name="kembali">Kembali</button>
		</form> 
		 </section>
        </section>
    </section>
</body>
</html>