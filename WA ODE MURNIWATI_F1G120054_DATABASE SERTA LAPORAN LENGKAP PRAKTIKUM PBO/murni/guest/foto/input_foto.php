<html>
<head>
	<title>Upload Gambar</title>
</head>
<body>
<form method="post" action="proses.php" enctype="multipart/form-data">
<table>
<tr>
<th colspan="2">Simpan & Tampil Gambar</th>
</tr>
<tr>
<td>Masukan Tipe_kamar</td>
<td>Pilih foto</td>
</tr>
<tr>
<td><input type="text" name="Tipe_kamar" id="Tipe_kamar" placeholder="Masukan Tipe_kamar" required=""></td>
<td><input type="file" name="foto" id="foto" required=""></td>
</tr>

<tr>
<td>gnbsp;</td>
<td><input type="submit" name="kirim" id="kirim" value="Simpan"></td>
</tr>
</form>

</body>
</html>