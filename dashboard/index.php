<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$Fasilitas_umum = mysqli_query($connection, "SELECT COUNT(*) FROM Fasilitas_umum");
$Booking = mysqli_query($connection, "SELECT COUNT(*) FROM Booking");
$Aktivitas = mysqli_query($connection, "SELECT COUNT(*) FROM Aktivitas");


$total_Fasilitas_umum = mysqli_fetch_array($Fasilitas_umum)[0];
$total_Booking = mysqli_fetch_array($Booking)[0];
$total_Aktivitas = mysqli_fetch_array($Aktivitas)[0];
?>

<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="column">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Booking</h4>
            </div>
            <div class="card-body">
              <?= $total_Booking ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Fasilitas_umum</h4>
            </div>
            <div class="card-body">
              <?= $total_Fasilitas_umum ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Aktivitas</h4>
            </div>
            <div class="card-body">
              <?= $total_Aktivitas ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>