<?php
// buat program, jumlah bilangan cacah antara  10 & 12345
// 11,13,15,17, .....,12345


$jumlah = 0;
for($i = 1; $i <= 1000005; $i++){
    if($i % 2==1){
        $jumlah = $jumlah +  $i;
    }
}
echo "$jumlah";