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
			echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="admin/index.php";</script>';
		// }else{
		// 	$_SESSION['guest']=$user;
		// 	echo '<script language="javascript">alert("Anda berhasil Login Guest!"); document.location="guest/index.php";</script>';
		}
	}
}
?>