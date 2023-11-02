<?php
class Produk {
    public $merek = "Sharp";
    public $stok = 50;

    public function cekStok() {
        return "Sisa stok: " . $this->stok;
    }
}

$produk01 = new Produk();
echo $produk01->merek;       // Output: Sharp
echo "<br>";
echo $produk01->cekStok();  // Output: Sisa stok: 50

?>
