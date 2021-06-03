<?php  

//Association Array
//Array assosiasi hampir sama definisi  nya dengan array muti dimensi akan tetapi di sini kita bisa mendefinisikan sendiri nama key nya (nama index nya).Mendefinisikan nama key harus dengan string lalu di ikuti tanda =>.Langsung ke contoh : 

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
	<title>Studi Kasus - Asociation Array</title>
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
	<h1>Daftar Rilis Anime</h1>

	<?php foreach ($animes as $anime) : ?>
	<ul>
		<li><img src="img/<?= $anime["gambar"]; ?>" class="image"></li>
		<li>Nama : <?= $anime["nama"];  ?></li>
		<li>Jenis : <?= $anime["jenis"];  ?></li>
		<li>Genre : <?= $anime["genre"];  ?></li>
		<li>Popularitas : <?= $anime["popularity"];  ?></li>
	</ul>
<?php endforeach; ?>
</body>
</html>
