<?php
  // menampilkan nilai maksimal fungsi rand() jika tanpa argumen
  echo getrandmax()."<br>";
  echo rand()."<br>";
  echo rand()."<br>";

  // angka acak dengan batas nilai
  echo rand(0,1)."<br>";
  echo rand(0,100)."<br>";

  // untuk membuat angka acak pecahan
  echo rand(0,100)/100;
  