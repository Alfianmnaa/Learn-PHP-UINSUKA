<?php
class Produk {
    public static $totalProduk = 100;
}

class Blender extends Produk {

}
echo Blender::$totalProduk; //total produk
