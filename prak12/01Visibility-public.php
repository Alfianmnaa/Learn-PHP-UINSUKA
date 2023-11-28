<?php
class Produk {
    public $merek;
    public function hello() {
        return"ini adalah Produk";
    }
}

$produk01 = new Produk();
$produk01->merek = "Asus";

echo $produk01->merek;
echo "<br>";
echo $produk01->hello();