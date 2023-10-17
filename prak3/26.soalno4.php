<?php
// buat program, 
// cek bilangan 7
// 7 merupakan bilangan ganjil

// $angka = 8;
for($angka = 90; $angka <= 100; $angka ++){
    if($angka % 2 == 1){
        echo "$angka merupakan bilangan ganjil";
    } else if($angka % 2 == 0){
        echo "$angka merupakan bilangan genap";
    }
    echo "<br>";
}