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

?>
