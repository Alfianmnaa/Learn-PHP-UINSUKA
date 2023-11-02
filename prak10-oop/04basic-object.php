<?php
class Produk {

}

$televisi = new Produk();
$mesinCuci = new Produk();
$speaker = new Produk();

var_dump($televisi);  // object(Produk)#1 (0) { }
echo "<br>";
var_dump($mesinCuci); // object(Produk)#2 (0) { }
echo "<br>";
var_dump($speaker);   // object(Produk)#3 (0) { }
?>
