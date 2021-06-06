<?php 
	//mengecek apakah data sudah di kirim atau belum.jika data dari url belum di kirim maka user akan me return ke halaman yang di tuju.
if ( !isset($_GET["nama"])	||
	 !isset($_GET["jenis"]) ||
	 !isset($_GET["genre"]) ||
	 !isset($_GET["popularity"]) ||
	 !isset($_GET["gambar"])) {

	//kita tentukan redirect ke mana dengan cara
	header("Location: latihan1.php");
	exit;//gi gunkana agar tidak menjalankan kode di bawah nya

}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Studi Kasus - GET & POST</title>
	<style type="text/css">
		h1 {
			color: #25E45F;
		}
		.image {
			width: 60%;
			height: 300px;
			background-size: contain;
		}
		li {
			font-size: 25px;
		}
	</style>
</head>
<body>
	<h1>Detail Anime</h1>

	<ul>
		<li><img src="img/<?= $_GET["gambar"]; ?>" class="image"></li>
		<li>Nama : <?= $_GET["nama"]; ?></li>
		<li>Jenis : <?= $_GET["jenis"]; ?></li>
		<li>Genre : <?= $_GET["genre"]; ?></li>
		<li>Popularitas : <?= $_GET["popularity"]; ?></li>
	</ul>


	<a href="latihan1.php">kembali ke daftar</a>
</body>
</html>