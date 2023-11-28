<?php
class Produk {
    private $merek;

    public function setMerek($merek) {
        $this->merek = $merek;
    }
    public function getMerek(){
        return $this->merek;
    }
}

$produk01 = new Produk();
$produk01->setMerek("Asus");

echo $produk01->getMerek();