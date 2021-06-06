<!DOCTYPE html>
<html>
<head>
	<title>Studi Kasus - POST</title>
</head>
<body>
	<?php if ( isset($_POST["submit"]) ) : ?>
		<h2>Hallo,Selamat Datang <?= $_POST["name"];  ?></h2>
	<?php endif; ?>
	<form action="" method="post">
		<label for="name">Username : </label>
		<input type="text" name="name" id="name">
		<button type="submit" name="submit">kirim!</button>
	</form>
</body>
</html>