<?php 
include('koneksi.php');
if(isset($_POST['login'])){
	$kode_member = $_POST['kode_member'];
	$nama = $_POST['nama'];
	$sql = mysqli_query($koneksi,"SELECT * FROM member WHERE kode_member='$kode_member' AND nama='$nama'");
	if(mysqli_num_rows($sql) == 0){
		echo 'User tidak ditemukan';
	}else{
		$row = mysqli_fetch_assoc($sql);
		if(isset($kode_member)){
			$_SESSION['guest']=$kode_member;
			$id=$row['id'];
			echo "<script>alert('Anda berhasil login!')
			var id=$id;
			document.location.href = 'guest/index.php?id='+ id;
			</script>";
		}
	}
}
?>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="login.css">
	<title>Masuk Sebagai</title>
</head>
<body> 
	<div class="container">
 		<h2 class ="text-center">Login Member</h3>
 			<hr>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="kode_member" id="kode_member" placeholder="Masukkan Kode Member">	<br>
			</div>

			<div class="form-group">
				<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">	
			</div> <br>

			<button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
		</form>
 	</div>
</body>
</html>