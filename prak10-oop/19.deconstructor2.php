<?php
class Produk {
    public function __construct() {
        echo "Constructor dijalankan...<br>";
    }

    public function __destruct() {
        echo "Destructor dijalankan...<br>";
    }
}

$produk01 = new Produk();
$produk01 = null;

echo "Program selesai<br>";

?>
