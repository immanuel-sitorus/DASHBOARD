<?php
session_start();
require_once '../helper/connection.php';

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$merk = $_POST['merk'];
$stok_barang= $_POST['stok_barang'];
$tanggal = $_POST['tanggal'];
$jumlah_barang = $_POST['jumlah_barang'];
$waktu_sewa = $_POST['waktu_sewa'];
$harga = $_POST['harga'];

$query = mysqli_query($connection, "UPDATE fasilitas_umum SET nama_barang = '$nama_barang', merk = '$merk', stok_barang = '$stok_barang', tanggal = '$tanggal', jumlah_barang = '$jumlah_barang', waktu_sewa = '$waktu_sewa', harga = '$harga' WHERE id_barang = '$id_barang'");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
?>