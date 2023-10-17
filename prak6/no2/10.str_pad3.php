<?php
  $a = "123";
  echo str_pad($a,8,'0',STR_PAD_LEFT)."<br>";

  $a = "12345";
  echo str_pad($a,8,'0',STR_PAD_LEFT)."<br>";
  
  $a = "123456789";
  echo str_pad($a,8,'0',STR_PAD_LEFT);
  