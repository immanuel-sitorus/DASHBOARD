<?php
session_start();
require_once '../helper/connection.php';

$kode_aktifitas = $_GET['kode_aktifitas'];

$result = mysqli_query($connection, "DELETE FROM aktivitas WHERE kode_aktifitas='$kode_aktifitas'");

if (mysqli_affected_rows($connection) > 0) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menghapus data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
