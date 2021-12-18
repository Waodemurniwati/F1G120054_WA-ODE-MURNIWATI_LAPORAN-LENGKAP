<?php 
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
	$No_ktp=$_POST["No_ktp"];
	$Nama_penyewa=$_POST["Nama"];
	$No_hp=$_POST["No_hp"];
	$Kesanggupan_membayar=$_POST["Kesanggupan_membayar"];
	$q1 = mysqli_query($koneksi,"INSERT INTO `penyewa_kost` (`No_ktp`, `Nama_penyewa`, `No_hp`, `Kesanggupan_membayar`) VALUES ('$No_ktp', '$Nama_penyewa', '$No_hp', '$Kesanggupan_membayar');");

	//cek apakah data berhasil di tambahkan atau tidak
	if(mysqli_affected_rows($koneksi)>0){
		echo "<script>alert('Data berhasil dipesan!'); 
		document.location.href='index2.php';
		</script>";
	}else{
		echo "<script>alert('Data gagal dipesan!');
		</script>";
	}
}
if (isset($_POST["kembali"])) {
	header('Location:index1.php');
}
$sql=mysqli_query($koneksi,"SELECT * FROM penyewa_kost");
$result = mysqli_fetch_array($sql);
// $row=mysqli_num_rows($result);
// var_dump($row); die;
	    	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pesan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Pesan</title>
</head>
<body>
<section class="container-fluid">
      <!--   justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
		<form action="" method="post" class="form-container">
                <h4 class="text-center font-weight-bold">Pesan</h4>
		<input type="hidden" name="id">
    	<label for="nama">No_ktp</label>
    	<input type="text" class="form-control" name="No_ktp" id ="No_ktp">
    	<label for="nama">&nbspNama</label>
    	<input type="text" class="form-control" name="Nama" id="Nama" >
    	<label for="no_hp">&nbspNo Telepon</label>
    	<input type="text" class="form-control" name="No_hp" id="No_hp">
	    <label for="email">&nbspKesanggupan_membayar</label>
	    <input type="text" class="form-control" name="Kesanggupan_membayar" id="Kesanggupan_membayar">
    	<!-- <label for="jenis_kelamin">&nbspJenis Kelamin</label>
    	<input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin">
    	<label for="golongan">&nbspNama Golongan </label>
	    <select name="id_golongan" class="form-control"> -->
	    	<?php  
	    	$sql="SELECT * FROM penyewa_kost";
	    	$hasil=mysqli_query($koneksi,$sql);

	    	$no=0;
	    	while ($data=mysqli_fetch_array($hasil)) {
	    	   $no++;
	    	?>
	    	<!-- <option value="<?= $data["id_golongan"]; ?>"><?= $data["nama_golongan"]; ?>
	    	</option> -->
			<?php } ?>
	    </select>
	    <br>
	    <button class="btn btn-success" type="submit" name="submit">Pesan</button>
		<button class="btn btn-danger" name="kembali">Kembali</button>
		</form> 
		 </section>
        </section>
    </section>
</body>
</html>