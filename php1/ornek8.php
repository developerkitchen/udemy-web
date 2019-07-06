<?php 

if(isset($_GET["id"]) && isset($_GET["category"])) {
	$id = $_GET["id"];
	$category = $_GET["category"];

	echo $id;
	echo $category;
} else {
	echo "sayfa hatası";
}

if(isset($_POST["name"])) {
	echo $_POST["name"];
}

?>

<form method="post" action="ornek8.php">
	<input type="text" name="name">
	<input type="submit" name="submit" value="Gönder">
</form>