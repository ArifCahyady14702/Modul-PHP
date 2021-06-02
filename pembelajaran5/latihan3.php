<?php 

//Studi Kasus Pengulangan Array & Array Multi Dimensi
//Array multi dimensi adalah sebuah array yang terdapat dalam array.Contoh

	$students = [
		["Arif Cahyady","14 tahun","121007021","Laki-Laki"],
		["Gusti Hendrawan","17 tahun","121007001","Laki-Laki"],
		["Cindy Dewi Chantika","17 tahun","121007013","Perempuan"]
	];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Studi Kasus - Latihan 3</title>
 </head>
 <body>
 	<h1>Daftar Pelajar Ceria</h1>

	<?php foreach ($students as $student) : ?>
	 	<ul>
	 		<li><?= $student[0];  ?></li>
	 		<li><?= $student[1];  ?></li>
	 		<li><?= $student[2];  ?></li>
	 		<li><?= $student[3];  ?></li>
	 	</ul>
 	<?php endforeach; ?>
 </body>
 </html>