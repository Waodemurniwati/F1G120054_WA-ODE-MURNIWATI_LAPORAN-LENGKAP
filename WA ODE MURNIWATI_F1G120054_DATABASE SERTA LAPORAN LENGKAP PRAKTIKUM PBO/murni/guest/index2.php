<?php 
require 'functions.php';
// akses();
$a = mysqli_query($koneksi,"SELECT * FROM  penyewa_kost ");
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
	<h2 <font color="blue"><marquee>SEMOGAH BETAH YAHH !!!</marquee></font></h2>
 		</div>
</div>
	</div>
	<div class="card">
 		<div class="card-header text-white bg-secondary">
 			PEMESAN_KOST
 		</div>
	  <div class="card-body">
	<table class="table" >
		<thead>
		<tr>
			<th scope="col">No KTP</th>
			<th scope="col">NAMA</th>
			<th scope="col">NO TELEPON</th>
			<th scope="col">KESANGGUPAN MEMBAYAR</th>
		</tr>
		</thead>
		<?php $urut=1; ?>
		<!-- <?php while ($b = mysqli_fetch_assoc($a)) {?> -->
		<tr>
			<td scope="row"><?= $b["No_ktp"]; ?></td>
			<td scope="row"><?= $b["Nama_penyewa"]; ?></td>
			<td scope="row"><?= $b["No_hp"]; ?></td>
			<td scope="row"><?= $b["Kesanggupan_membayar"]; ?></td>
			
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