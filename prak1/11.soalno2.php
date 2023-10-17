<?php
$jumlahbaris = 6;
for($i = 1; $i <= $jumlahbaris; $i++){
    //looping  baris horizontal
    for($j = 1; $j <= $i; $j++){
        // kondisi 1 --> jika ganjil cetak *
        if($j % 2 == 1){
            echo "*";
        }
        // kondisi 2 --> jika genap cetak #
        if($j % 2 == 0){
            echo "#";
        }
    }
    echo "<br>";
}