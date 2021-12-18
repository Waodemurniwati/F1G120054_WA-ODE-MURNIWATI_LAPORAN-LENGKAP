<?php 
require 'functions.php';
akses();
$a = query("SELECT * FROM member,golongan WHERE member.id_golongan=golongan.id_golongan ORDER BY kode_member");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Manager</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		.mx-auto{width: 1200px;
			margin-top: 10px;
		}
		.card {margin-top: 5px;}
		th,td{vertical-align: middle;
			align-self: center;
		}
		.btn{width: 75px}
		#a{
			width: 300px;
			margin-top: 5px;
		}
	</style>
</head>
<body>
<div class="mx-auto">
	<div class="card">
 		<div class="card-header">
	<h2 align="center">Halaman Manager</h2>
 		</div>
	  <div class="card-body" align="center">
	<a href="tambah_golongan.php"><button type="button" id="a" class="btn btn-info">Create Golongan</button></a>
	<br>
	<a href="tambah.php"><button type="button" id="a" class="btn btn-info">Tambah Member</button></a>
	<br>
</div>
	</div>
	<div class="card">
 		<div class="card-header text-white bg-secondary">
 			Data Member
 		</div>
	  <div class="card-body">
	<table class="table" >
		<thead>
		<tr>
			<th scope="col">No.</th>
			<th scope="col">Kode Member</th>
			<th scope="col">Nama</th>
			<th scope="col">No Telepon</th>
			<th scope="col">Email</th>
			<th scope="col">Jenis Kelamin</th>
			<th scope="col">Id Golongan</th>
			<th scope="col">Nama Golongan</th>
			<th scope="col">Aksi</th>
		</tr>
		</thead>
		<?php $urut=1; ?>
		<?php foreach ($a as $baju) {?>
		<tr>
			<td scope="row"><?= $urut; ?></td>
			<td scope="row"><?= $baju["kode_member"]; ?></td>
			<td scope="row"><?= $baju["nama"]; ?></td>
			<td scope="row"><?= $baju["no_hp"]; ?></td>
			<td scope="row"><?= $baju["email"]; ?></td>
			<td scope="row"><?= $baju["jenis_kelamin"]; ?></td>
			<td scope="row"><?= $baju["id_golongan"]; ?></td>
			<td scope="row"><?= $baju["nama_golongan"]; ?></td>
			<td scope="row"><a href="ubah.php?id=<?= $baju["id"]; ?>"><button type="button" class="btn btn-warning">Ubah</button></a>
				<a href="hapus.php?id=<?= $baju["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data?')">
					<button type="button" class="btn btn-danger">Hapus</button>
				</a>
			</td>
		</tr>
			<?php $urut++; ?>
		<?php } ; ?>
	</table>
</div>
</div><br>
<a href="../logout.php"><button type="button" class="btn btn-danger">Keluar</button></a>
</div>
</body>
</html>