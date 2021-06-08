<?php 
//koneksi ke database 
$db = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari database / query data
$result = mysqli_query($db, "SELECT * FROM mahasiswa");

//cek database
if ( !$result) {
	echo mysqli_error($db);
}
//menampilkan isi data dalam tabel
//mysqli_fetch_row // menghasilkan output array numeric
//mysqli_fetch_aasoc // menampilkan array asosiatif
//mysqli_fetch_array // menmpilkan keduanya
//mysqli_fetch_object // menmapilkan data dalam bentuk object dengan penulisan ->
//di atas hanya dapat menmpilkan satu data saja maka untuk menampilkan seluruh data kita harus menggunakan : 

//menampilkan isi data tabel seluruh nya
// while($mhs = mysqli_fetch_assoc($result)) {
// 	var_dump($mhs["nama"]);
// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP dan Database</title>
</head>
<body>
	<h2>Daftar Mahasiswa</h2>
	<table border="1" cellpadding="10" cellspacing="0" width="90%">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nrp</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>

		<?php while ($mhs = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td>1</td>
			<td>
				<a href="" style="color: yellow;">ubah |</a>
				<a href="" style="color: red;">hapus</a>
			</td>
			<td>
				<img src="img/<?= $mhs["gambar"] ?>" width="100px;" height="100px;">
			</td>
			<td><?= $mhs["nrp"] ?></td>
			<td><?= $mhs["nama"] ?></td>
			<td><?= $mhs["email"]  ?></td>
			<td><?= $mhs["jurusan"] ?></td>

		</tr>
	<?php endwhile; ?>
	</table>
</body>
</html>