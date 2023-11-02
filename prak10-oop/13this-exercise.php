<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;
    public function pesanProduk() {
        $this->stok -= 1;
    }

    public function cekStok() {
        return "Sisa stok: " . $this->stok . "<br>";
    }
}

$produk01 = new Produk();
$produk01->jenis = "Televisi";
$produk01->merek = "Samsung";
$produk01->stok = 54;

echo $produk01->cekStok(); // Sisa stok: 54

$produk01->pesanProduk();
$produk01->pesanProduk();
$produk01->pesanProduk();

echo $produk01->cekStok(); // Sisa stok: 51
?>
