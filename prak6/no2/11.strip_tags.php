<?php
  $komentar="<b>Nice info gan</b>, <br> <i>kunjungi blog ane ya... </i>
             <a href='http;//www.situsspam.com'>www.situsspam.com</a>";
   echo $komentar;

   echo "<br>";

   echo strip_tags($komentar);

   echo "<br>";

   echo strip_tags($komentar,"<br><i>");
   