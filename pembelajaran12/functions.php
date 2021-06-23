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
	$nrp = htmlspecialchars($tambah["nrp"]);
	$nama = htmlspecialchars($tambah["nama"]);
	$email = htmlspecialchars($tambah["email"]);
	$jurusan = htmlspecialchars($tambah["jurusan"]);

	$gambar = upload();

	if ( !$gambar ) {
		return false;
	}

	//masukan query
	$query = "INSERT INTO mahasiswa VALUES
		('','$gambar','$nrp','$nama','$email','$jurusan')";

	mysqli_query($db,$query);

	//mengembalikan error query berupa angka
	return mysqli_affected_rows($db);
}

function upload()
{
	//ambil data dari variabel super global $_FILES

	$namaFile = $_FILES["gambar"]["name"];
	$tmpName = $_FILES["gambar"]["tmp_name"];
	$error = $_FILES["gambar"]["error"];

	//cek apakah gambar ada atau tidak

	if ( $error === 4 ) {
		echo "<script>
			alert('Maaf! Silahkan Pilih Gambar Terlebih Dahulu!')
			</script>";
			return false;
	}

	//cek apakah yang di upload gambar atau tidak

	$ekstensiGambarValid = ["jpg","jpeg","png"];
	$ekstensiGambar = explode(".", $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	//cocokan data dari ekstensi gambar valid dengan data yang di input user

	if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
			alert('Maaf! Gambar yang anda pilih tidak valid!')
			</script>";
			return false;
	}


	//generate nama file baru

	$namaFileBaru = uniqid();
	$namaFileBaru .= ".";
	$namaFileBaru .= $ekstensiGambar;

	//lolos pengecekan,pindahkan file
	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);


	return $namaFileBaru;
}


function hapus($id)
{
	global $db;

	$query = "DELETE FROM mahasiswa WHERE id = $id";

	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}



function ubah($ubah) {
	//mengambil variabel db di atas
	global $db;

	//ambil data dari tiap post dalam form
	$id = $ubah["id"];
	$nrp = htmlspecialchars($ubah["nrp"]);
	$nama = htmlspecialchars($ubah["nama"]);
	$email = htmlspecialchars($ubah["email"]);
	$jurusan = htmlspecialchars($ubah["jurusan"]);

	$gambarLama = htmlspecialchars($ubah["gambarLama"]);

	if ($_FILES["gambar"]["error"] === 4) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}

	//masukan query
	$query = "UPDATE mahasiswa SET
				gambar = '$gambar',
				nrp = '$nrp',
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan'
			WHERE id = $id";

	mysqli_query($db,$query);

	//mengembalikan error query berupa angka
	return mysqli_affected_rows($db);
}


function cari($keyword)
{
	$query = "SELECT * FROM mahasiswa 
				WHERE
			nama LIKE '%$keyword%' OR
			nrp LIKE '%$keyword%' OR
			jurusan LIKE '%$keyword%'
	";
	return query($query);
}






?>