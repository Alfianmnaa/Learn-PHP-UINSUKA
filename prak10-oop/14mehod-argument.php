<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function pesanProduk() {
        $this->stok -= 1;
    }
    public function borongProduk($jumlah) {
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

echo $produk01->cekStok();  // Sisa stok: 54

$produk01->borongProduk(10);
echo $produk01->cekStok();  // Sisa stok: 44

$produk01->borongProduk(25);
echo $produk01->cekStok(); // sisa stok: 19
?>
