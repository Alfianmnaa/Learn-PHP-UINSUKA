<?php

$jumlahbaris = 5;
for($i = 1; $i <= $jumlahbaris; $i++){
    for($j = 5; $j >= $i - 1; $j--){
    echo "&nbsp";
    }
   for($k = 1; $k <= $i; $k++){
        echo "*";
    }
    echo "<br>";
}