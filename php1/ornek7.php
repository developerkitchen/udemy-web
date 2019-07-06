<?php 

function toplam($sayi1, $sayi2) {
	return $sayi1 + $sayi2;
}

$deger = toplam(5, 6);

echo "toplam : ".$deger."<br>";

function yazdir($string) {
	return $string;
}

echo "<br> deger:".yazdir($deger);

function hesapla($sayi) {
	if($sayi < 10) {
		$sayi = $sayi + 1;
		hesapla($sayi);
	} else {
		echo "<br>hesapladım sayi : $sayi";
	}
}

hesapla(1);

?>