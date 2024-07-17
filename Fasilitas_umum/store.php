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

$query = mysqli_query($connection, "INSERT into fasilitas_umum (id_barang, nama_barang, merk, stok_barang, tanggal, jumlah_barang, waktu_sewa, harga) value('$id_barang', '$nama_barang', '$merk', '$stok_barang', '$tanggal', '$jumlah_barang', '$waktu_sewa', '$harga')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
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