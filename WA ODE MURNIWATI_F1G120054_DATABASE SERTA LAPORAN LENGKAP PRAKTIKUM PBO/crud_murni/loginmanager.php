<?php 
include('koneksi.php');
if(isset($_POST['login'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$sql = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
	if(mysqli_num_rows($sql) == 0){
		echo 'User tidak ditemukan';
	}else{
		$row = mysqli_fetch_assoc($sql);
		if($row['level'] == 1){
			$_SESSION['admin']=$user;
			echo '<script language="javascript">alert("Anda berhasil Login!"); document.location="admin/index.php";</script>';
}
	}
}
 ?>
 
<html>
<head>
	<title>Masuk Sebagai</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
 		<div class="container">
 		<h2 class ="text-center">Login Manager</h3>
 			<hr>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="username" id="username" placeholder="Username">	<br>
			</div>

			<div class="form-group">
				<input type="password" class="form-control" name="password" id="password" placeholder="Password">	
			</div> <br>

			<button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
		</form>
 	</div>
</body>
</html>