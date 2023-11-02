<?php
  $siswa = array("andi", "gina", "joko", "santi", "rini", "rika", "joy");
  $key_siswa = array_rand($siswa,);

  print_r($key_siswa);

  echo $siswa[$key_siswa[0]];
  echo "<br>";
  echo $siswa[$key_siswa[1]];
  