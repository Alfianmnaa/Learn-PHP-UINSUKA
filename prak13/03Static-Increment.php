<?php
class Produk {
    private static $totalProduk = 0;
    public function __construct(){
        self::$totalProduk++;
        echo "Class Produk dibuat, total produk = ".self::$totalProduk."<br>";

    }
}
$produkA = new Produk();
$produkA = new Produk();
$produkA = new Produk();
$produkA = new Produk();
