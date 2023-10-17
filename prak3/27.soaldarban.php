<?php


for ($i = 1; $i <= 5; $i++) {
    // mecetak spasi
    for($j=4; $j >= $i; $j--){
        echo "&nbsp;";

    }

    // Mencetak bintang
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }

    // Pindah ke baris baru
    echo "<br>";
}
?>
