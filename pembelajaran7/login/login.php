<?php  
//cek apakah submit telah di tekan
if ( isset($_POST["submit"])) {
	if (($_POST["name"]) == "admin" && $_POST["password"] == "123")  {
		header("Location: admin.php");
		exit;	
	}else {
		$error = true;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php if ( isset($error)) : ?>
		<p style="color: yellow; font-style: italic;">username / password salah!</p>
	<?php endif; ?>
	<h1>Login Admin</h1>
	<ul>
		<form action="" method="post">
			<li>
				<label for="name">Username : </label>
				<input type="text" name="name" id="name">
			</li>
			<br>
			<li>
				<label for="name">Password : </label>
				<input type="password" name="password" id="password">
			</li>
			<br>
			<button type="submit" name="submit">kirim!</button>
		</form>
	</ul>
</body>
</html>