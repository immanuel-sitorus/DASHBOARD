<?php
session_start();
require_once '../helper/connection.php';

$kode_aktifitas = $_POST['kode_aktifitas'];
$nama_aktivitas = $_POST['nama_aktivitas'];
$deskripsi = $_POST['deskripsi'];
$query = mysqli_query($connection, "insert into aktivitas (kode_aktifitas, nama_aktivitas, deskripsi) value ('$kode_aktifitas', '$nama_aktivitas', '$deskripsi')");

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
