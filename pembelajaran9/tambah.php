<?php  
require 'functions.php';

if ( isset($_POST["submit"])) {
	
	if ( tambah($_POST) > 0) {
		echo "<script>
		alert('data berhasil di tambahkan!');
		document.location.href = 'index.php';
		</script>";
	}else {
		echo "<script>
		alert(data gagal di tambahkan);
		document.location.href = 'tambah.php';
		</script>";
	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<h2>Tambah Data Mahasiswa</h2>
	<form action="" method="post">
		<ul>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<li>
				<label for="nrp">Nrp : </label>
				<input type="text" name="nrp" id="nrp" required>
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required>
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	</form>
	<a href="index.php"><button>kembali</button></a>
</body>
</html>