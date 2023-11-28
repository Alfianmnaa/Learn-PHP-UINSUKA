<?php
class Produk {
    public static $totalProduk = 100;
    public static function cekProduk(){
        return "total produk ada ".self::$totalProduk;
    }
}

echo Produk::cekProduk(); //Total Produk ada 100