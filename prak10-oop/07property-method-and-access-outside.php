<?php
class Produk {
    public $sku = "001";
    public $merek = "Samsung";
    public $harga = 4000000;
    public function pesanProduk(){
        return "Produk dipesan...";
    }
}
$mesinCuci = new Produk();
$mesinCuci = new Produk();
$mesinCuci->sku = "002";
$mesinCuci->merek = "LG";
$mesinCuci->harga = 1500000;

echo $mesinCuci->sku;        // 002
echo "<br>";
echo $mesinCuci->merek;      // LG
echo "<br>";
echo $mesinCuci->harga;      // 1500000
echo "<br>";
echo $mesinCuci->pesanProduk(); // Produk dipesan...
?>