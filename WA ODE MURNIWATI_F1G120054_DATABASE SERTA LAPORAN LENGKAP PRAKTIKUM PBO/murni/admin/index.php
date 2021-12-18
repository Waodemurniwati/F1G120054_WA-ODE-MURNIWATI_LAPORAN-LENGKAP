<?php 
require 'functions.php';
// akses();
$a = mysqli_query($koneksi,"SELECT * FROM pemilik_kos,kamar_kos WHERE pemilik_kos.id_kamar=kamar_kos.id_kamar");
?>

<!DOCTYPE html>
<html>
<head>
	<title>PEMILIK</title>
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
	<h2><font color="blue"><marquee>Selamat Datang</marquee></font></h2>
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
 			KAMAR_KOS
 		</div>
	  <div class="card-body">
	<table class="table" >
		<thead>
		<tr>
			<th scope="col">Id</th>
			<th scope="col">TIPE_KAMAR</th>
			<th scope="col">FASILITAS</th>
			<th scope="col">SISTEM_PEMBAYARAN</th>
		</tr>
		</thead>
		<?php $urut=1; ?>
		<?php while ($b = mysqli_fetch_assoc($a)) {?>
		<tr>
			<td scope="row"><?= $b["id_kamar"]; ?></td>
			<td scope="row"><?= $b["Tipe_kamar"]; ?></td>
			<td scope="row"><?= $b["fasilitas"]; ?></td>
			<td scope="row"><?= $b["sistem_pembayaran"]; ?></td>
			<td scope="row"><a href="ubah.php?id=<?= $b["id"]; ?>"><button type="button" class="btn btn-warning">Ubah</button></a>
				<a href="hapus.php?id=<?= $b["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data?')">
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