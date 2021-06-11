<?php  
require 'functions.php';


$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];//0 di sini untuk melangsungkan membaca array numerik ke value nya

if ( isset($_POST["submit"])) {
	
	if ( ubah($_POST) > 0) {
		echo "<script>
		alert('data berhasil di ubah!');
		document.location.href = 'index.php';
		</script>";
	}else {
		echo "<script>
		alert(data gagal di ubah);
		document.location.href = 'tambah.php';
		</script>";
	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
</head>
<body>
	<h2>Ubah Data Mahasiswa</h2>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs["id"] ?>">
		<ul>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"] ?>">
			</li>
			<li>
				<label for="nrp">Nrp : </label>
				<input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"] ?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required value="<?= $mhs["email"] ?>">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
			</li>
			<li>
				<button type="submit" name="submit">ubah Data!</button>
			</li>
		</ul>
	</form>
	<a href="index.php"><button>kembali</button></a>
</body>
</html>