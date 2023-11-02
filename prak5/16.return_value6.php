<?php
  function tambah_kurang($satu,$dua) {
   $hasil[] = $satu + $dua;
   $hasil[] = $satu - $dua;
   return $hasil;
}

// hasil = [130,70]

$a = tambah_kurang(100,30);

echo "100 tambah 30 = ".$a[0]; // 130
echo "<br>";
echo "100 kurang 30 = ".$a[1]; // 70
?>