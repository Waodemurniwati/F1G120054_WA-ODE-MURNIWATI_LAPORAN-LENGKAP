<?php 
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

	//cek apakah data berhasil di tambahkan atau tidak
	if(tambah($_POST)>0){
		echo "<script>alert('Data berhasil ditambahkan!');
		</script>";
	}else{
		echo "<script>alert('Data gagal ditambahkan!');
		</script>";
	}
}
if (isset($_POST["kembali"])) {
	header('Location:index.php');
}
$sql=mysqli_query($koneksi,"SELECT * FROM golongan");
$result = mysqli_fetch_array($sql);
$row=mysqli_num_rows($result);
var_dump($row); die;
	    	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Member</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Ubah Data</title>
</head>
<body>
<section class="container-fluid">
        justify-content-center untuk mengatur posisi form agar berada di tengah-tengah
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
		<form action="" method="post" class="form-container">
                <h4 class="text-center font-weight-bold"> Tambah  Data Member</h4>
		<input type="hidden" name="id">
    	<label for="nama">&nbspNama</label>
    	<input type="text" class="form-control" name="nama" id ="nama">
    	<label for="kode_member">&nbspKode Member</label>
    	<input type="text" class="form-control" name="kode_member" id="kode_member" >
    	<label for="no_hp">&nbspNo Telepon</label>
    	<input type="text" class="form-control" name="no_hp" id="no_hp">
	    <label for="email">&nbspEmail</label>
	    <input type="text" class="form-control" name="email" id="email">
    	<label for="jenis_kelamin">&nbspJenis Kelamin</label>
    	<input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin">
    	<label for="golongan">&nbspNama Golongan </label>
	    <select name="id_golongan" class="form-control">
	    	<?php  
	    	$sql="SELECT * FROM golongan";
	    	$hasil=mysqli_query($koneksi,$sql);

	    	$no=0;
	    	while ($data=mysqli_fetch_array($hasil)) {
	    	   $no++;
	    	?>
	    	<option value="<?= $data["id_golongan"]; ?>"><?= $data["nama_golongan"]; ?>
	    	</option>
			<?php } ?>
	    </select>
	    <br>
	    <button class="btn btn-success" type="submit" name="submit">Tambah Member</button>
		<button class="btn btn-primary" name="kembali">Kembali</button>
		</form> 
		 </section>
        </section>
    </section>
</body>
</html>