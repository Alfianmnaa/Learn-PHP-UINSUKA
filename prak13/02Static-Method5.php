<?php
class Produk {
    public static $totalProduk = 100;
    public static function cekProduk(){
        return "total produk ada ".self::$totalProduk;
    }
}

class Blender extends Produk {
    public static function cekBlender(){
      return self::cekProduk(). ', termasuk 3 Jenis Blender <br>';
    }
}
class HairDryer extends Produk {
    public static function cekHairDryer(){
      return parent::cekProduk(). ', termasuk 5 Jenis HairDryer <br>';
    }
}
class Mixer extends Produk {
    public static function cekMixer(){
      return Produk::cekProduk(). ', termasuk 2 Jenis Mixer <br>';
    }
}

$produk01 = new Blender();
echo $produk01->cekBlender();
$produk02 = new HairDryer();
echo $produk02->cekHairDryer();
$produk03 = new Mixer();
echo $produk03->cekMixer();
