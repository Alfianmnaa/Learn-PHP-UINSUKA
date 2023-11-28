<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;
    public function __construct($jenis, $merek, $stok) {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }
    public function __destruct() {
        unset($this->jenis, $this->merek, $this->stok);
        echo "Property Class Produk Sudah Dihapus... <br>";
    }
}

class Televisi extends Produk {
    public $ukuranLayar;
    public function __construct($jenis, $merek, $stok, $ukuranLayar) {
        parent::__construct($jenis, $merek, $stok);
        $this->ukuranLayar = $ukuranLayar;
    }
    public function __destruct() {
        unset($this->ukuranLayar);
        echo "Property Class Televisi Sudah Dihapus... <br>";
    }
}

$produk01 = new Televisi("Televisi", "Samsung", 20, 32);
print_r($produk01);
echo "<pre>";