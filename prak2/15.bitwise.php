<?php
$a=0b10110101;
$b=0b10110100;

$hasil = $a & $b;
echo $hasil;
echo "<br>";

$hasil = $a | $b;
echo $hasil;
echo "<br>";

$hasil = $a ^ $b;
echo $hasil;
echo "<br>";

$hasil = ~$a;
echo $hasil;
echo "<br>";

$hasil = $a >> 1;
echo $hasil;
echo "<br>";

$hasil = $b << 2;
echo $hasil;
echo "<br>";