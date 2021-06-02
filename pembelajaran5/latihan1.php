<?php 

//Array
/* 
	Array adalah sebuah variabel yang di gunakan untuk menampung banyak nilai.nilai di dalam array di sebut element.membuat array ada dua cara yaitu:
*/
//Cara lama
	$hari = array("Senin","Selasa","Rabu");
//Cara Baru
	$bulan = ["Januari","Februari","Maret"];
//Array dapat menampung element dengan type berbeda walau dalam satu variabel
	$ex = [123,"Contoh", false];

//Mencetak array
//Ada 2 cara mencetak array,yaitu var_dump() / print_r()
	var_dump($hari);
	echo "<br>";
	print_r($bulan);
	echo "<br>";

//kita bisa juga menampilkan hanya satu element di dalam array menggunakan echo
	echo $bulan[0];
	echo "<br>";

//menambahkan element pada array tanpa mengubah variabel nya dapat menggunakan cara
	print_r($hari);
	$hari[] = "Kamis";
	$hari[] = "Jum'at";
	print_r($hari);
?>