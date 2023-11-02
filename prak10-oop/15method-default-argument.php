<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;
    public function borongProduk($jumlah = 10) {
        $this->stok -= $jumlah;
    }

    public function cekStok() {
        return "Sisa stok: " . $this->stok . "<br>";
    }
}

$produk01 = new Produk();
$produk01->jenis = "Televisi";
$produk01->merek = "Samsung";
$produk01->stok = 54;

$produk01->borongProduk();
echo $produk01->cekStok();  // Output: Sisa stok: 44

$produk01->borongProduk(20);
echo $produk01->cekStok();  // Output: Sisa stok: 24

?>
