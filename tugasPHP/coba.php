<?php

// echo $jumlah = (($a = 6) + (2 * ($b = 8 + $c = 4)));


$a = 2;
$b = 3;
$coba4 = pangkat($a, 2) + pangkat($b,2);

echo $coba1 = ($a * $a) + ($b * $b) ."<br>";
echo $coba2 = ($a ** 2) + ($b ** 2);
echo $coba3 = pow($a, 2) + pow($b,2)."<br>";

echo $coba4;
function pangkat($nilai, $p2){
return $nilai ** $p2;
}