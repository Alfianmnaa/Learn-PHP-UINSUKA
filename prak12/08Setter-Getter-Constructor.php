<?php
class Produk {
    private $merek;
    private $stok;
    private function setMerek($merek){
        if(is_string($merek)){
            $this->merek = $merek;
        }
       else {
        die("Error: merek harus berbentuk string <br>");
       }
    }
    private function setStok($stok) {
        if(is_int($stok)) {
        $this->stok = $stok;
        }
        else {
            die("Error: stok harus angka bulat <br>");
        }
    }
    
    public function __construct($merek, $stok){
        $this->setMerek($merek);
        $this->setStok($stok);
    }

    public function getMerek(){
        return strtoupper($this->merek);
    }
    public function getStok(){
        return $this->stok;
    }
}

$produk01 = new Produk("Acer", 10);
echo "Stok Produk ".$produk01->getMerek().": ".$produk01->getStok();