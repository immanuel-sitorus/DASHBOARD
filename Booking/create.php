<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Booking Tenda</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="POST">
            <table cellpadding="8" class="w-100">

              <tr>
                <td>ID Pesanan</td>
                <td><input class="form-control" type="number" name="id_pesanan" size="20" required></td>
              </tr>

              <tr> 
                <td>Username</td>
                <td><input class="form-control" type="text" name="username" size="20" required></td>
              </tr>

              <tr>
                <td>Jumlah Tenda</td>
                <td>
                  <select class="form-control" name="jumlah_tenda" id="jumlah_tenda" required>
                    <option value="">--Pilih Jumlah Tenda--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </td>
              </tr>

              <tr>
              <td>Harga Tenda</td>
                <td>
                  <select class="form-control" name="harga_tenda" id="harga_tenda" required>
                    <option value="">--Pilih Harga Tenda--</option>
                    <option value="300000">300000</option>
                    <option value="450000">450000</option>
                    <option value="600000">600000</option>
                  </select>
                </td>
                </tr>

              <tr>
                <td>No Phone customer</td>
                <td><input class="form-control" type="number" name="no_phone_customer" size="20" required></td>
              </tr>
              
              <tr>
                <td>Tanggal Pemesanan</td>
                <td><input class="form-control" type="date" id="detepicker" name="tanggal_pemesanan" required></td>
              </tr>

              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Pesan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Batal"></td>
              </tr>

            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>