<!DOCTYPE html>
<html>
<head>
	<title>UDEMY LOGIN</title>
</head>
<body>

	<?php 
		if(isset($_POST["eposta"]) && isset($_POST["password"])) {
			$eposta = $_POST["eposta"];
			$password = $_POST["password"];

			if($eposta == "udemy@gmail.com" && $password == "123456") {
				echo "login olundu";
			} else {
				echo "hata";
			}
		}

	?>

	<form method="post" accept="ornek9.php">
		<input type="text" name="eposta" placeholder="Email Giriniz...">
		<input type="password" name="password" placeholder="Parola Giriniz">
		<input type="submit" name="submit" value="Login">
	</form>

</body>
</html>