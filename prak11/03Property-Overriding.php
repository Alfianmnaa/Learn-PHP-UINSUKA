<?php
class Produk {
    public $merek = "Sony";
}

class Televisi extends Produk {
    public $merek = "Panasonic";
}

$produk01 = new Televisi();
echo $produk01->merek;