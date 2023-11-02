<?php
class Produk {
    public $sku = "001";
    public $merek = "Samsung";
    public $harga = 4000000;
    public function pesanProduk(){
        return "Produk dipesan...";
    }
}   
$televisi = new Produk();