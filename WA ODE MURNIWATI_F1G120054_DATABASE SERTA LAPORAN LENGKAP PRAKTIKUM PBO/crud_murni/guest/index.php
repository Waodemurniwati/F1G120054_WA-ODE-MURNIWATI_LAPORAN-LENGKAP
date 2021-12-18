<?php 
require 'functions.php';
akses();
$id=$_GET['id'];
$a=query("SELECT * FROM member,golongan WHERE member.id_golongan=golongan.id_golongan AND id='$id'")[0];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Member</title>
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
	<center><h3>Data Member</h3></center>
 	</div>
	 <div class="card-body">
	 	<center>
	<table class="table">
		<tr>
			<td>Kode Member</td>
			<td>: <?= $a["kode_member"]; ?></td>
		</tr>			
			<td>Nama</td>
			<td>: <?= $a["nama"]; ?></td>
		</tr>			
			<td>No Telepon</td>
			<td>: <?= $a["no_hp"]; ?></td>
		</tr>			
			<td>Email</td>
			<td>: <?= $a["email"]; ?></td>
		</tr>			
			<td>Jenis Kelamin</td>
			<td>: <?= $a["jenis_kelamin"]; ?></td>
		</tr>			
			<td>Id Golongan</td>
			<td>: <?= $a["id_golongan"]; ?></td>
		</tr>			
			<td>Nama Golongan</td>
			<td>: <?= $a["nama_golongan"]; ?></td>
		</tr>
		<tr>
			<td colspan="2">
				<a href="ubah.php?id=<?= $a['id']; ?>">
				<button type="button" class="btn btn-danger">Ubah Data</button>
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