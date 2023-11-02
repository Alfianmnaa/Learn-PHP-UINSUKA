<?php
class Produk {
    public $jenis;
    public $merek;

    public function pesanProduk() {
        return $this->jenis . " " . $this->merek . " dipesan...";
    }
}

$produk01 = new Produk();
$produk01->jenis = "Televisi";
$produk01->merek = "Samsung";

$produk02 = new Produk();
$produk02->jenis = "Mesin cuci";
$produk02->merek = "LG";

echo $produk01->pesanProduk(); // Televisi Samsung dipesan...
echo "<br>";
echo $produk02->pesanProduk(); // Mesin cuci LG dipesan...
?>
