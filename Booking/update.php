<?php
session_start();
require_once '../helper/connection.php';

$id_pesanan = $_POST['id_pesanan'];
$username = $_POST['username'];
$jumlah_tenda = $_POST['jumlah_tenda'];
$harga_tenda = $_POST['harga_tenda'];
$no_phone_customer = $_POST['no_phone_customer'];
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];

$query = mysqli_query($connection, "UPDATE booking  SET username = '$username', jumlah_tenda = '$jumlah_tenda', harga_tenda = '$harga_tenda',no_phone_customer = '$no_phone_customer', tanggal_pemesanan = '$tanggal_pemesanan' WHERE $id_pesanan ='ID Pesanan'");
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
