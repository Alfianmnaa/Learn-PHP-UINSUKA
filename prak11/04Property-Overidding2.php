<?php
class Produk {

    public function merek(){
        $merek = "Sony";
        return $merek;  
    }
}
class Televisi extends Produk {
    public $merek = "Panasonic";
    public function merekProduk() {
        $merekProduk = parent::merek();
        return $merekProduk;
    }
   
}
$produk01 = new Televisi();
echo $produk01->merekProduk();