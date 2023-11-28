<?php
class Produk {
    public function hello(){
        return "ini dari produk";
    }
}
class Televisi extends Produk {
    public function hello(){
        return "ini dari Televisi";
    }
    public function helloProduk(){
        return parent::hello();
    }
}

$produk01 = new Televisi();
echo $produk01->helloProduk();