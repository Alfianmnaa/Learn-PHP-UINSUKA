<?php
class Produk {
    public static $totalProduk = 100;
    public static function cekProduk(){
        return "total produk ada ".self::$totalProduk;
    }
}

class Blender extends Produk {

}
echo Blender::cekProduk(); //Total Produk ada 100