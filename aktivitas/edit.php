<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$kode_aktifitas = $_GET['kode_aktifitas'];
$query = mysqli_query($connection, "SELECT * FROM aktivitas WHERE kode_aktifitas='$kode_aktifitas'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Aktifitas</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update.php" method="post">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <input type="hidden" name="kode_aktifitas" value="<?= $row['kode_aktifitas'] ?>">
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>Kode Aktivitas</td>
                  <td><input class="form-control" required value="<?= $row['kode_aktifitas'] ?>" disabled></td>
                </tr>
                <tr>
                  <td>Nama Aktivitas</td>
                  <td><input class="form-control" type="text" name="nama_aktivitas" required value="<?= $row['nama_aktivitas'] ?>"></td>
                </tr>
                <tr>
                  <td>Deskripsi</td>
                  <td><input class="form-control" type="text" name="deskripsi"  required value="<?= $row['deskripsi'] ?>"></td>
                </tr>
                <tr>
                  <td>
                    <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                  <td>
                </tr>
              </table>

            <?php } ?>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>