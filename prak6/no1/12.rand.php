<?php
  // menampilkan nilai maksimal fungsi rand() jika tanpa argumen
  echo getrandmax()."<br>"; //nilai bit terbesar
  echo rand()."<br>"; // nilai bit acak dari 0 ke grandmax
  echo rand()."<br>";

  // angka acak dengan batas nilai
  echo rand(0,1)."<br>";
  echo rand(0,100)."<br>"; // nilai bit acak dari 0 ke 100

  // untuk membuat angka acak pecahan
  echo rand(0,100)/100;
  