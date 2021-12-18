<?php 
include('koneksi.php');
if(isset($_POST['login'])){
	$id = $_POST['id'];
	$nama_pemilik = $_POST['nama_pemilik'];
	$sql = mysqli_query($koneksi,"SELECT * FROM pemilik_kos WHERE id='$id' AND nama_pemilik='$nama_pemilik'");
	if(mysqli_num_rows($sql) == 0){
		echo 'User tidak ditemukan';
	}else{
		$row = mysqli_fetch_assoc($sql);
		if(isset($id)){
			$_SESSION['guest']=$id;
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
	<title>LOGIN</title>
</head>
<body> 
	<div class="container">
 		<h2 class ="text-center">Login</h3>
 			<hr>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="id" id="id" placeholder="Username">	<br>
			</div>

			<div class="form-group">
				<input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" placeholder="Password">	
			</div> <br>

			<button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
		</form>
 	</div>
</body>
</html>