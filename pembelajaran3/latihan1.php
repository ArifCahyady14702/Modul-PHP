<?php 

//Control Flow(Struktur Kendali)
//Secara default PHP akan membaca script kita dari atas ke bawah dan dari kiri ke kanan.Namun dengan ada nya control flow kita bisa mengatur pembacaan script kita

//Pengulangan
/* 1.for
	terdiri dari : inisial(nilai awal), kondisi terminasi, increment atau decrement.Nilai awal berguna untuk inisialisas variabel awal pengulangan,kondisi terminasi untuk memberhentikan pengulangan(batas pengulangan),increment atau decrement untuk menentukan alur pengulangan naik atau turun 
	Contoh:
	for ($i = 0; $i < 5; $i++) {
		echo "Hello world! <br>";
	}

	2.while
	terdiri dari : inisial(nilai awal) *di letakan di dalam variabel di luar, kondisi terminasi, increment atau decrement
	Contoh:
	$i = 0;
	while ($i < 5) {
		echo "Hello world! <br>";
		$i++;
	}

	3. do while
	terdiri dari : inisial(nilai awal), increment atau decrement, kondisi terminasi
	Contoh:
	$i = 0;
	do {
		echo "Hello World! <br>";
		$i++;
	} while ($i < 5);
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contoh Kasus Pengulangan</title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="30">
		<?php for ($i = 1; $i <= 3; $i++) : ?>
			<tr>
				<?php for ($j = 1; $j <= 5; $j++) : ?>
					<td>
						<?= $i.",".$j ?>
					</td>
				<?php endfor; ?>
			</tr>
	<?php endfor; ?>
	</table>
</body>
</html>