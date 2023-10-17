<?php
function cekbilangan($i) {
    if ($i % 2 == 0) {
        return "Angka $i merupakan bilangan genap";
    } else {
        return "Angka $i merupakan bilangan ganjil";
    }
}

$result = cekbilangan(8);
echo $result;
