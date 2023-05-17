<!DOCTYPE html>
<html>
<head>
	<title>Input Data Mahasiswa</title>
</head>
<body bgcolor="green">
<form action="tampilmahasiswa.php" method="post">
<br>
<pre>
	Nama : <input type="text" name="name" size="25" maxlength="50">
	alamat :<input type="text" name="alamat" size="25" maxlength="50">
</pre>
	Jenis Kelamin : 
	<input type="radio" name="jeniskel" value="Laki-laki">Laki-laki<input type="radio" name="jeniskel" value="Perempuan">Perempuan
<p>
	Pekerjaan :
	<select name="pekerjaan">
	<option value="-pilih-">
	<option value="Pelajar">Pelajar
	<option value="Karyawan">Karyawan
	<option value="Wirausaha">Wirausaha
	<option value="lain-lain">Lain-lain
</select>
<p>
	Hobi:
	<input type="checkbox" name="hobi1" value="Olahraga">Olahraga
	<input type="checkbox" name="hobi1" value="Musik">Musik
	<input type="checkbox" name="hobi1" value="Jalan-jalan">Jalan-jalan
<p>
	<input type="submit" value="Kirim"><input type="Reset" value="Batal">
</form>
</body>
</html>