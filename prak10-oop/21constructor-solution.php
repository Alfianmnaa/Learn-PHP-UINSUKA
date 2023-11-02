<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function __construct($jenisInput, $merekInput, $stokInput) {
        $this->jenis = $jenisInput;
        $this->merek = $merekInput;
        $this->stok = $stokInput;
    }
}

$produk01 = new Produk("Televisi", "Samsung", 20);
$produk02 = new Produk("Mesin cuci", "LG", 10);

print_r($produk01);
echo "<br>";
print_r($produk02);

?>
