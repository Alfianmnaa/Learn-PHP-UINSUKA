<?php
class Produk {
    public $sku;
    public $stok;
}

class Televisi extends Produk {
    public $ukuranLayar;
}

class MesinCuci extends Produk {
    public $kapasitas;
}

class Speaker extends Produk {
    public $konfigurasi;
}

$produk01 = new Televisi();
$produk02 = new MesinCuci();
$produk03 = new Speaker();

var_dump( is_a($produk01, 'Produk') );    // bool(true)
var_dump( is_a($produk01, 'Televisi') );  // bool(true)
var_dump( is_a($produk02, 'Produk') );    // bool(true)
var_dump( is_a($produk02, 'Televisi') );  // bool(false)
var_dump( is_a($produk03, 'Speaker') );   // bool(true)

?>
