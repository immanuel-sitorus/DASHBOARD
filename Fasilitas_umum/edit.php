<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id_barang = $_GET['id_barang'];
$query = mysqli_query($connection, "SELECT * FROM fasilitas_umum WHERE id_barang='$id_barang'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Fasilitas</h1>
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
              <input type="hidden" name="id_barang" value="<?= $row['id_barang'] ?>">
              <table cellpadding="8" class="w-100">
              <tr>
                <td>Id Barang</td>
                <td><input class="form-control" required value="<?= $row['id_barang'] ?>" disabled></td>
              </tr>
              <tr>
                <td>Nama Barang</td>
                <td><input class="form-control" type="text" name="nama_barang" required value="<?= $row['nama_barang'] ?>"></td>
              </tr>
              <tr>
                <td>Merk</td>
                <td>
                <select class="form-control" type="text" name="merk" required value="<?= $row['merk'] ?>">
                  <option value="">--Pilih Merk--</option>
                    <option value="Coleman">Coleman</option>
                    <option value="Big Agnes">Big Agnes</option>
                    <option value="MSR ">MSR </option>
                    <option value="Eiger">Eiger</option>
                    <option value="Consina">Consina</option>
                    <option value="Arei">Arei</option>
                    <option value="Avtech">Avtech</option>
                    <option value="Alpina">Alpina</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Stok Barang</td>
                <td><input class="form-control" type="timestamp" name="stok_barang" required value="<?= $row['stok_barang'] ?>"></td>
              </tr>
              <tr>
                <td>Tanggal</td>
                <td><input class="form-control" type="date" name="tanggal" required value="<?= $row['tanggal'] ?>"></td>
              </tr>
              <tr>
                <td>Jumlah Barang</td>
                <td><input class="form-control" type="text" name="jumlah_barang" required value="<?= $row['jumlah_barang'] ?>"></td>
              </tr>
              <tr>
                <td>Waktu Sewa</td>
                <td>
                <input class="form-control" type="time" name="waktu_sewa" required value="<?= $row['waktu_sewa'] ?>">
                </td>
              </tr>

              <tr>
              <td>Harga</td>
                <td>
                <select class="form-control" type="text" name="harga" required value="<?= $row['harga'] ?>">
                    <option value="">--Pilih Harga--</option>
                    <option value="Rp 150.000">Rp 150.000</option>
                    <option value="Rp 200.000">Rp 200.000</option>
                    <option value="Rp 300.000">Rp 300.000</option>
            </select>
                </td>
                </tr>

              <tr>
                <td>
                <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                </td>
              </tr>
            </table>
          </form>

            <?php } ?>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>