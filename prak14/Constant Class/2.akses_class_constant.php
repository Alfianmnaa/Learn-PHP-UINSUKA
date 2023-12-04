<?php
class Produk {
    public const KURSUSD = 15000;
}

$produk01 = new Produk();
echo $produk01->KURSUSD;    // Warning: Undefined property: Produk::$KURSUSD