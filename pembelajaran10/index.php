<?php 
require 'functions.php';

//query ini menampung dari $rows yang ada di function / data yang di kembalikan $rows
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Studi Kasus - PHP dan Database</title>
</head>
<body>
	<h2>Daftar Mahasiswa</h2>
	<a href="tambah.php">tambah data</a>
	<br><br>
	<table border="1" cellpadding="10" cellspacing="0" width="90%">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nrp</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>

		<?php $i = 1;	//untuk membuat angka berurut otomatis ?>
		<?php foreach ($mahasiswa as $mhs) : ?>
		
		<tr>
			<td><?= $i;  ?></td>
			<td>
				<a href="ubah.php?id=<?= $mhs["id"] ?>" style="color: yellow;">ubah |</a>
				<a href="hapus.php?id=<?= $mhs["id"] ?>" style="color: red;" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');">hapus</a>
			</td>
			<td>
				<img src="img/<?= $mhs["gambar"] ?>" width="100px;" height="100px;">
			</td>
			<td><?= $mhs["nrp"] ?></td>
			<td><?= $mhs["nama"] ?></td>
			<td><?= $mhs["email"]  ?></td>
			<td><?= $mhs["jurusan"] ?></td>

		</tr>
		<?php $i++ ?>
	<?php endforeach; ?>
	</table>
</body>
</html>