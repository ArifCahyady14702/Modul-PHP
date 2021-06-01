<?php 

//Pengkondisian atau Percabangan
/*1.if else
	Contoh:
	$x = 10
	if ($x < 20) {
		echo "benar";
	} else {
		echo "salah";
	}
2. if elseif else
	Contoh:
	$x = 20
	if ($x < 20) {
		echo "benar";
	} elseif ($x == 20) {
		echo "bingo";
	} else {
		echo "salah";
	}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contoh Kasus Pengkondisian</title>
	<style type="text/css">
		.warna {
			background-color: silver;
		}
	</style>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="30">
		<?php for ($i = 1; $i <= 5; $i++) : ?>
			<?php if ($i % 2 == 1) :  ?>
				<tr class="warna">
			<?php else : ?>
				<tr>
			<?php endif; ?>
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