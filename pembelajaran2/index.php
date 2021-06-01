<?php 
// Pertemuan 2 - PHP Dasar
//Sintaks PHP

//Standar Output
/* 
	PHP memiliki perintah output antara lain : echo,print,print_r(untuk menampilkan isi array),
	var_dump(untuk debugging development)
	CONTOH:
*/
	echo "Arif Cahyady<br>";//<br> di gunakan untuk membuat kalimat berikut nya ke bawah
	print "Arif Cahyady<br>";
	print_r("Arif Cahyady<br>");
	var_dump("Arif Cahyady");

//Penulisan Sintaks PHP
	/*1. PHP di dalam HTML

	  2. HTML di dalam PHP */

//Variabel dan Tipe Data
	//Variabel
	 /* Variabel di gunakan untuk menamoung sebuah nilai,baik angka string ataupun array.Di dalam PHP variabel
	 di simbolkan dengan tanda $.Penulisan variabel tidak boleh di awali dengan angka tetapi boleh mengandung angka dan
	 di ikuti setelah nya tanda =
	 CONTOH: */
	 $nama = "Arif Cahyady";

//Operator
	 /* 
	 1.Aritmatika
	 	Di gunkan untuk perhitungan matematika
	 	Terdiri dari : +(tambah), -(kurang), *(kali), /(bagi), %(sisa bagi atau modulus
	 	Contoh:
	 	$x = 10;
	 	$y = 20;
	 	echo $x + $y;
	 2.Penggabungan string/concatenation/concat
	 	Digunakan untuk menggabungkan dua string berbeda
	 	Terdiri dari : . 
	 	Contoh: 
	 	$nama_depan = "Arif";
	 	$nama_belakang = "Cahyady";
	 	echo $nama_depan . $nama_belakang;
	 3.Assignment
	 	Digunakan untuk penugasan
	 	Terdiri dari : =, +=, -=, *=, /=, %=, .=
	 	Contoh:
	 	$nama = "Arif";
	 	$nama .= " ";
	 	$nama .= "Cahyady"; *di sini meskipun nama variabel nya berbeda akan tetapi nilai yang ada di variabel tidak akan di timpa karena menggunakan .=
	 	echo $nama; *inputan yang keluar ialah Arif Cahyady
	 4.Perbandingan
	 	Digunakan untuk suatu pengkondisian dan hanya mengecek nilai
	 	Terdiri dari : <, >, <=, >=, ==, !=
	 	Contoh:
	 	var_dump(1 > 5); *hasil keluaran nya ialah bool(false) yang artinya kondisi tersebut salah
	 5.Identitas
	 	Hampir sama seperti perbandingan akan tetapi operator identitas juga mengecek tipe data suatu nilai juga
	 	Terdiri dari: ===, !==
	 	Contoh:
	 	var_dump(1 == "1"); *hasil keluaran nya ialah bool(true) karena menggunakan perbandingan,sedangkan
	 	var_dump(1 === "1") * hasil keluaran nya ialah bool(false) karena tipe data keduanya berbeda
	 6.Logika
	 	Digunakan untuk perbandingan dua kondisi
	 	Terdiri dari: &&, ||, !
	 	Contoh:
	 	$x = 10;
	 	var_dump($x > 5 && $x % 2 == 0 ); *ketika menggunakan && kedua kondisi harus dalam keadaan benar hasilnya bool(true) dan % 2 == 0 di gunakan untuk mengecek bilangan genap
	 	var_dump($x < 5 || $x % 2 == 0); *menggunakan || kedua kondisi tidak harus benar boleh satu saja yang benar hasil nya bool(true)*/
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP Dasar - Penulisan Sintaks PHP</title>
</head>
<body>
	<h5>Ini yang PHP di dalam <?php echo "HTML"; ?></h5>
	<?php echo "<h5>Ini yang HTML di dalam PHP</h5>"; ?>
	
	<h5>nama saya adalah <?php echo $nama //variabel nama mengambil nilai dari variabel di atas?> </h5>


</body>
</html>

