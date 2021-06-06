<?php 

//Variabel Scope (lingkup variabel)
//terbagi menjadi variabel lokal(variabel yang hanya bisa di gunakan dalam lingkup nya saja),global(variabel yang mengambil nilai dari variabel di luar lingkup nya),super global(variabel yang bisa di gunakan di mana saja)
//1.variabel lokal

// $angka = 10;

// function number()
// {
// 	echo $angka;
// }
// number();/*untuk mencetak function*/
// echo "<br>";

//di sini pasti akan error karena $angka yang berada di dalam function mempunyai lingkup yang berbeda dari variabel angka yang berada di luar nya sehingga jika kita ingin memanggil $angka yang di luar cukup tulis kan echo $angka.sedangkan jika kita ingin menggunakan variabel angka yang di luar ke dalam function maka gunakan variabel global seperti di bawah

//2.variabel global
// $angka = 10;

// function bilangan()
// {
// 	global $angka;
// 	echo $angka;
// }

// bilangan();
// echo"<br>";
//3.variabel super global
//terdapat beberapa variabel super global diantaranya : 
// var_dump($_GET);

//kita menggunakan var_dump karena variabel super global adalah array asosiasi

//Studi Kasus

$animes = [
	[
		"nama" => "sosako ko naru",
		"jenis" => "manga",
		"genre" => "action",
		"popularity" => "9.0",
		"gambar" => "cake.jpg"
	],

	[
		"nama" => "kenshin mugiwara",
		"jenis" => "manga",
		"genre" => "action,adventure",
		"popularity" => "8.9",
		"gambar" => "coklat.jpg"
	]];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Studi Kasus - GET & POST</title>
	<style type="text/css">
		h1 {
			color: #25E45F;
		}
		li {
			font-size: 25px;
		}
	</style>
</head>
<body>
	<h1>Daftar Rilis Anime</h1>

	<ul>
		<?php foreach($animes as $anime) : ?>
			<li>
				<a href="latihan2.php?nama=<?= $anime["nama"]; ?>&jenis=<?= $anime["jenis"]; ?>&genre=<?= $anime["genre"];  ?>&popularity=<?= $anime["popularity"]; ?>&gambar=<?= $anime["gambar"]; ?>"><?= $anime["nama"]; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>
