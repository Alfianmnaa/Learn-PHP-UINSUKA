<?php
// connect ke database (konfigurasi)
// Urutan argumen dalam fungsi mysqli_connect adalah sebagai berikut:
// 1 Hostname atau alamat server database.
// 2 Nama pengguna (username) untuk mengakses database.
// 3 Kata sandi (password) untuk mengakses database.
// 4 Nama database yang ingin Anda hubungkan.

$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = 'crud_db';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

