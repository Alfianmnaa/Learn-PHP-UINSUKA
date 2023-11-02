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
echo $televisi->sku;        // 002
echo "<br>";
echo $televisi->merek;      // LG
echo "<br>";
echo $televisi->harga;      // 1500000
echo "<br>";
echo $televisi->pesanProduk(); // Produk dipesan...
?>