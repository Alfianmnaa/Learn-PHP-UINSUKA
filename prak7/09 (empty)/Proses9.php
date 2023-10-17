<h1>Halaman Proses</h1>
<?php
  $nama=$_POST["nama"];
  $email=$_POST["email"];

  if (empty($nama)) {
    echo "Nama wajib diisi <br>";
  }
  else {
    echo "Nama: $nama <br>";
  }
  if (empty($email)) {
    echo "Email wajib diisi <br>";
  }
  else {
    echo "Email: $email <br>";
  }
  if (isset($_POST["belajar"])) {
    echo "Belajar: ".$_POST["belajar"]."<br>";
  }
?>