<?php 

$sayi = 0;

while($sayi <= 3) {
	echo "sayi : $sayi<br>";
	$sayi = $sayi + 1;
}

echo "<br>";


$sayi = 0;

while($sayi >= 0 && $sayi<=3) {
	echo "sayi : $sayi<br>";
	$sayi = $sayi + 1;
}

echo "<br>";

$sayi = 1;

do {
	echo "sayi : $sayi<br>";
	$sayi = $sayi + 1;
} while($sayi < 10);

?>