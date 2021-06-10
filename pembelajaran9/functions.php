<?php  
//koneksi ke database 
$db = mysqli_connect("localhost", "root", "", "phpdasar");



function query($query) {

	global $db;
	$result = mysqli_query($db, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($tambah) {
	//mengambil variabel db di atas
	global $db;

	//ambil data dari tiap post dalam form
	$gambar = htmlspecialchars($tambah["gambar"]);
	$nrp = htmlspecialchars($tambah["nrp"]);
	$nama = htmlspecialchars($tambah["nama"]);
	$email = htmlspecialchars($tambah["email"]);
	$jurusan = htmlspecialchars($tambah["jurusan"]);

	//masukan query
	$query = "INSERT INTO mahasiswa VALUES
		('','$gambar','$nrp','$nama','$email','$jurusan')";

	mysqli_query($db,$query);

	//mengembalikan error query berupa angka
	return mysqli_affected_rows($db);
}


function hapus($id)
{
	global $db;

	$query = "DELETE FROM mahasiswa WHERE id = $id";

	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}

?>