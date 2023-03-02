<?php
Function hitung () {
    $a = 5;
    $b = 10;
    echo $a+$b, "<br>";
}
hitung ();

Function hitung2 ($a,$b) {
    echo $a+$b, "<br>";
}
hitung2 (2,3);

Function hitung3 ($a,$b) { 
    $hasil = $a+$b;
    return $hasil;
}
echo hitung3 (200,56);