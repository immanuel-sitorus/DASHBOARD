<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id_pesanan = $_GET['id_pesanan'];
$query = mysqli_query($connection, "SELECT * FROM booking WHERE id_pesanan='$id_pesanan'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Booking</h1>
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
              <input type="hidden" name="id_pesanan" value="<?= $row['id_pesanan'] ?>">
              <table cellpadding="8" class="w-100">
              <tr>
                <td>ID Pesanan</td>
                <td><input class="form-control" required value="<?= $row['id_pesanan'] ?>" disabled></td>
              </tr>

              <tr>
                <td>username</td>
                <td> <input class="form-control" type="text" name="username" required value="<?= $row['username'] ?>"></td>
              </tr>

              <tr>
                <td>Jumlah Tenda</td>
                <td>
                <select class="form-control" type="text" name="jumlah_tenda" required value="<?= $row['jumlah_tenda'] ?>">
                    <option value="">--Pilih Jumlah Tenda--</option>
                    <option value="Pria">1</option>
                    <option value="Wanita">2</option>
                    <option value="Wanita">3</option>
                  </select>
                </td>
              </tr>

              
              <tr>
                <td>Harga Tenda</td>
                <td>
                <select class="form-control" type="text" name="harga_tenda" required value="<?= $row['harga_tenda'] ?>">
                    <option value="">--Pilih Harga Tenda--</option>
                    <option value="Pria">(STANDAR) Rp 300.000</option>
                    <option value="Wanita">(EKONOMI) Rp 450.000</option>
                    <option value="Wanita">(HIGH CLASS) Rp 600.000</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>No Phone customer</td>
                <td><input class="form-control" required value="<?= $row['no_phone_customer'] ?>"></td>
              </tr>
              
              <tr>
                <td>Tanggal Pesanan</td>
                <td><input class="form-control" required value="<?= $row['tanggal_pemesanan'] ?>"></td>
              </tr>
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