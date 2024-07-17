<?php
session_start();
require_once '../helper/connection.php';

$id_pesanan = $_POST['id_pesanan'];
$username = $_POST['username'];
$jumlah_tenda = $_POST['jumlah_tenda'];
$harga_tenda = $_POST['harga_tenda'];
$no_phone_customer = $_POST['no_phone_customer'];
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];

$query = mysqli_query($connection, "insert into booking(id_pesanan, username, jumlah_tenda, harga_tenda, no_phone_customer, tanggal_pemesanan) value('$id_pesanan', '$username', '$jumlah_tenda', '$harga_tenda', '$no_phone_customer', '$tanggal_pemesanan')");
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
