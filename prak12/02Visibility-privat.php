<?php
class Produk {
    private $merek;
    private function hello() {
        return"ini adalah Produk";
    }
}

$produk01 = new Produk();

// fatal error: cannot access private property
$produk01->merek = "Asus";

// fatal error: cannot access private property
echo $produk01->merek;
echo "<br>";
// fatal error: cannot access private property
echo $produk01->hello();