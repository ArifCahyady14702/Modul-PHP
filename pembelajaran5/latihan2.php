<?php 

//Pengulangan pada array
//Bisa menggunakan for / foreach
	$angka = [1,3,5,7,9,20,12,21,23];

?>	

<!DOCTYPE html>
<html>
<head>
	<title>Studi Kasus - Latihan 2</title>
	<style type="text/css">
		.kotak {
			width: 100px;
			height: 100px;
			background-color: salmon;
			text-align: center;
			line-height: 100px;
			margin: 3px;
			float: left;
			font-size: 45px;
		}
		.clear {clear : both;}	
	</style>
</head>	
<body>
	<!-- Cara Pertama -->

	<?php for($i = 0; $i < count($angka); $i++) : ?><!-- count di sini di gunakan untuk menghitung secara otomatis jika ada perubahan elemnt dalam array bisa juga dengan kondisi terminasi biasa tapi tidak akan otomatis -->
		<div class="kotak"><?= $angka[$i] ?></div>
	<?php endfor; ?>

	<div class="clear"></div>

	<!-- Cara Kedua -->
	<?php foreach ($angka as $a) : ?><!-- menggunakan foreach maka akan bisa di hitung otomatis element dalam array tanpa harus ada kondisi terminasi -->
		<div class="kotak"><?= $a  ?></div>
	<?php endforeach; ?>
</body>
</html>