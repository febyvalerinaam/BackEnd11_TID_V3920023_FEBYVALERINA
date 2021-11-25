<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah</title>
</head>
<body>
	<h3>Halaman Tambah Mahasiswa</h3>
	<?php echo form_open_multipart('home/fungsiTambah'); ?>
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
    			<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><select type="text" name="jurusan">
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Teknik Elektro">Teknik Elektro</option>
				<option value="Teknik Mesin">Teknik Mesin</option>
				<option value="Akutansi">Akutansi</option>
				<option value="THP">THP</option>
			</select>
		</tr>
		<tr>
			<td>Angkatan</td>
			<td>:</td>
			<td><input type="checkbox" name="angkatan" value="2019"> 2019<br>
    			<input type="checkbox" name="angkatan" value="2020"> 2020<br>
    			<input type="checkbox" name="angkatan" value="2021"> 2021<br>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal"></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td><input type="file" name="foto"></td>
		</tr>
		<tr>
			<td colspan="3"><button type="submit">Tambah Data Mahasiswa</button></td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</body>
</html>