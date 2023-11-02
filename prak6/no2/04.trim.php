<?php
  $a = " abcd  ";
  echo strlen($a)."<br>";

  $trim_a = trim($a); // trim menghilangkan spasi
  echo $trim_a."<br>";
  echo strlen($trim_a)."<br>";

  $ltrim_a = ltrim($a); // left trim spasi dari kiri hilang
  echo $ltrim_a."<br>";
  echo strlen($ltrim_a)."<br>";

  $rtrim_a = rtrim($a); // right trim spasi dari kanan hilang
  echo $rtrim_a."<br>";
  echo strlen($rtrim_a);
