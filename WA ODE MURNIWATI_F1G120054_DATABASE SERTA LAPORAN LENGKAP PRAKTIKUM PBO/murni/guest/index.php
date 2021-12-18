<?php 
require 'functions.php';
akses();
$id=$_GET['id'];
$a=query("SELECT * FROM pemilik_kos,kamar_kos WHERE pemilik_kos.id_kamar=kamar_kos.id_kamar AND id='$id'")[0];
?>

<!DOCTYPE html>
<html>
<head>
	<title>PEMILIK</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		.mx-auto{width: 450px;
			margin: 30px;
		}
	button{
		width: 400px;
	}
	</style>
</head>
<body><div class="mx-auto">
	<div class="card">
 	<div class="card-header">
	<center><h3>PEMILIK_KOS</h3></center>
 	</div>
	 <div class="card-body">
	 	<center>
	<table class="table">
		<tr>
			<td>id</td>
			<td>: <?= $a["id"]; ?></td>
		</tr>			
			<td>Nama</td>
			<td>: <?= $a["nama_pemilik"]; ?></td>
		</tr>			
			<td>Biaya</td>
			<td>: <?= $a["Biaya_kamar"]; ?></td>
		</tr>			
			<td>No Tlp</td>
			<td>: <?= $a["no_hp"]; ?></td>
		</tr>			
			<td>ID_KAMAR</td>
			<td>: <?= $a["id_kamar"]; ?></td>
		</tr>			
			<td>Alamat</td>
			<td>: <?= $a["Alamat"]; ?></td>
		</tr>			
			<td colspan="2">
				<a href="index1.php">
				<button type="button" class="btn btn-danger">Lihat kos</button>
				</a>
				</td>
		</tr>	
		<tr>
			<td colspan="2">
				<a href="../logout.php">
			<button type="button" class="btn btn-warning">Logout</button>
			</a>
			</td>
		</tr>
	</table>
	 	</center>
</div>
</div>
</div>
</body>
</html>