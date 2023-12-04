<?php
include('koneksi.php');
$koneksi = new database();
$action = $_GET['action'];

if ($action == "add") {
    $koneksi->tambah_data($_POST['nama_barang'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual']);
    header('location:tampil_data.php');
} elseif ($action == "update") {
    $koneksi->update_data($_POST['nama_barang'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual'], $_POST['id_barang']);
    header('location:tampil_data.php');
} elseif ($action == "delete") {
    $id_barang = $_GET['id'];
    $koneksi->delete_data($id_barang);
    header('location:tampil_data.php');
}
?>
