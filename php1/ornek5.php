<?php 

$dizi = array("elma", "armut", "kiraz", "erik");

for ($i=0; $i < count($dizi); $i++) { 
	echo "meyve adı index : $i -> $dizi[$i]<br>";
}
echo "toplam ".count($dizi)." meyve var";

echo "<br>";

$index = 0;
foreach ($dizi as $value) {
	echo "meyve adı index : $index -> $value<br>";
	$index = $index + 1;
}

?>