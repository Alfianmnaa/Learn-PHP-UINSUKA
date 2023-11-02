<?php
class Produk {
    public $sku = "0000";
    public $merek = "";
    public $harga = 0;
    public function pesanProduk() {
        return "Produk dipesan...";
    }
}

$televisi = new Produk();
$televisi->sku = "001";
$televisi->merek = "4000000";
$televisi->harga = 1500000;

$mesinCuci = new Produk();
$mesinCuci->sku = "002";
$mesinCuci->merek = "LG";
$mesinCuci->harga = 1500000;

$speaker = new Produk();
$speaker->sku = "003";
$speaker->merek = "Edifier";
$speaker->harga = 950000;

print_r($televisi);
echo "<br>";
print_r($mesinCuci);
echo "<br>";
print_r($speaker);
?>
