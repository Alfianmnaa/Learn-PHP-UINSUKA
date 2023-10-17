<?php

// $a = array();
// for($i = 10; $i < 12345; $i++){
//     if($i % 2 == 1){
//        echo "$i,";
//        array_push($a, $i);
//     }
// }
// echo "<br>";
// echo count($a);

$hitung = 0;
for($i = 10; $i < 12345; $i++){
    if($i % 2 == 1){
       echo "$i,";
       $hitung++;
    }
}
echo "<br>";
echo $hitung;
// $panjang = "panjang";
// echo strlen($panjang);
// echo strlen($i) ;