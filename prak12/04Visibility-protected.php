<?php
class Produk {
    protected $merek;
    protected function hello() {
        return"ini adalah Produk";
    }
}

$produk01 = new Produk();
// Fatal error: Uncaught Error: Cannot access protected property
$produk01->merek = "Asus";

// Fatal error: Uncaught Error: Cannot access protected property
echo $produk01->merek;
echo "<br>";

// Fatal error: Uncaught Error: Cannot access protected property
echo $produk01->hello();