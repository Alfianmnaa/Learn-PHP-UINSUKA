<?php
class Produk {
    public $jenis = "";
    public $merek = "";
    public function pesanProdukTelevisi() {
        return "Televisi dipesan...";
    }

    public function pesanProdukMesinCuci() {
        return "Mesin cuci dipesan...";
    }
}

$produk01 = new Produk();
$produk01->jenis = "Televisi";
$produk01->merek = "Samsung";

$produk02 = new Produk();
$produk02->jenis = "Mesin cuci";
$produk02->merek = "LG";

echo $produk01->pesanProdukTelevisi();
echo "<br>";
echo $produk02->pesanProdukMesinCuci();
?>
