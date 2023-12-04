<?php
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
       <title></title>
</head>
<body>
<a href="tambah_data.php">Tambah Data</a>
<table border="1">
                <tr>
                        <th>No</th>
                        <th>Barang</th>
                        <th>Stok</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Action</th>
                </tr>
                <?php
                $no = 1;
                foreach($data_barang as $row){
                        ?>
                        <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['nama_barang']; ?></td>
                                <td><?php echo $row['stok']; ?></td>
                                <td><?php echo $row['harga_beli']; ?></td>
                                <td><?php echo $row['harga_jual']; ?></td>
                                <td>
                                        <a href="edit.php?id=<?php echo $row['id_barang']; ?>">Update</a>
                                        <a href="proses_barang.php?action=delete&id=<?php echo
$row['id_barang']; ?>">Delete</a>
                                </td>
                        </tr>
                        <?php
                }
                ?>
        </table>
</body>
</html>