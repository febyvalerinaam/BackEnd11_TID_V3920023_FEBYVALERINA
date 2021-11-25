<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Home</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Data Pengumpulan Tugas Blog Mahasiswa UNS</h1>


	<?php echo $this->session->flashdata('message'); ?>
	<a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah Data</a>
	<a>|</a>
	<a href="<?php echo base_url('/Post') ?>">Upload Konten Blog</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<td>No</td>
			<td>NIM</td>
			<td>Nama</td>
			<td>Jenis Kelamin</td>
			<td>Jurusan</td>
			<td>Angkatan</td>
			<td>Tanggal Upload</td>
			<td>Foto</td>
			<td>Aksi</td>
		</tr>
		<?php
		$count = 0;
		foreach ($queryAllMhs as $row) {
			$count = $count + 1;
		?>
		<tr>
			<td><?php echo $count ?></td>
			<td><?php echo $row->nim ?></td>
			<td><?php echo $row->nama ?></td>
			<td><?php echo $row->jenis_kelamin ?></td>
			<td><?php echo $row->jurusan ?></td>
			<td><?php echo $row->angkatan ?></td>
			<td><?php echo $row->tanggal ?></td>
			<td><img src="<?=base_url('')?>assets/images/<?=$row->foto?>" width="110px" height="100px" alt="foto" ></td>
			<td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->nim ?>">Edit</a> | <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->nim ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>