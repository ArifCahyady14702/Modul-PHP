<?php 

//Function

//Built-in-function
/* 
	Merupakan function yang telah di sediakan oleh PHP yang berguna untuk mempermudah kita dalam mengerjakan sesuatu.

1.Date
	di gunakan untuk mengetahui hari pada saat ini
	Contoh:
	echo date("l, d-M-Y"); 
	*di dalam kurung kita harus mengisi berupa parameter atau argument.cek http://php.net/manual/en/funcref.php
2.Time
	di gunakan untuk mengetahui hari saat ini terhitung dari waktu pertama kali komputer yaitu 1 januari 1970.time akan menampilkan format waktu dalam hitungan detik
	Contoh:
	echo time();
	jka digabungkan dengan date maka:
	echo date("l, d-M-Y", time()+60*60*24*20);
	*akhiran plus di gunakan untuk menghitunh hari kedepan dan sebalik nya untuk minus
3.Mktime
	di gunakan untuk mengetahui waktu sesuai yang kita tentukan
	Contoh:
	mktime(0,0,0,0,0,0); *terdiri dari jam,menit,detik,bulan,tanggal,tahun
	jika digabungkan dengan date maka:
	echo date("l", mktime(0,0,0,14,07,2002));
4.Strtotime
	di gunakan untuk menampilkan waktu sesuai keinginan kita tetapi dalam parameter string
	Contoh:
	echo strtotime("14 jul 2002"); 
5.Strlen
	di gunakan untuk menghitung panjang dari sebuah string
6.Strcmp
	di gunakna untuk membandingkan dua buah string
7.Explode
	untuk memcah string menjadi array
8.HTMLspecialchars
	untuk menjaga kodingan kita dari org gak di kenal
9.Isset
	untuk megecek apakah sebuah variabel sudah di gunakan atau belum
10.Empty
	untuk mengecek apakah sebuah variabel kosong atau tidak
11.Die
	untuk memberhentikan sebuah perintah
12.Sleep
	untuk memberhentikan sementara sebuah perintah*/
?>