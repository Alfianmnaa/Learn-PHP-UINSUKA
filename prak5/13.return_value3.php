<?php
  function tambah($satu,$dua) {
    $hasil = $satu + $dua;
    return $hasil;
}

$a = tambah(6,10); //16
$b = tambah($a,9);  //25

echo $b;
