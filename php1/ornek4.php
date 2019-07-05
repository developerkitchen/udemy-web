<?php 

$isimler = array("İbrahim", "Mehmet", "Hasan");
//$arrayName = array('' => , );

echo "Benim adım $isimler[0]<br>";

echo "toplam ".count($isimler)." kişi var<br>";

$toplam = count($isimler);

echo "toplam $toplam kişi var<br>";

$isimler[] = "Mustafa";

echo "yeni toplam ".count($isimler)." kişi var<br>";

$hasmap = array('admin' => "İbrahim", 'user' => "Hasan",);

echo $hasmap["admin"]."<br>";
echo $hasmap["user"];

?>