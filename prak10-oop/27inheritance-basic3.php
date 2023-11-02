<?php
class Produk {
    public $merek = "Sharp";
    public $stok = 50;

    public function cekStok() {
        return "Sisa stok: " . $this->stok;
    }
}

class Televisi extends Produk {
    public $jenis = "Televisi";

    public function cekStokTelevisi() {
        return $this->jenis . " " . $this->merek . ", " . $this->cekStok();
    }
}

class TelevisiLCD extends Televisi {
    public $tipe = "LCD";

    public function cekStokTelevisiLCD() {
        return $this->tipe . " " . $this->cekStokTelevisi();
    }
}

$produk01 = new TelevisiLCD();
echo $produk01->merek;                 // Output: Sharp
echo "<br>";
echo $produk01->jenis;                 // Output: Televisi
echo "<br>";
echo $produk01->tipe;                  // Output
