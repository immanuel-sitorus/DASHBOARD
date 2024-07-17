<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Fasilitas</h1>
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
                <td>Id Barang</td>
                <td><input class="form-control" type="number" name="id_barang"></td>
              </tr>
              <tr>
                <td>Nama Barang</td>
                <td><input class="form-control" type="text" name="nama_barang"></td>
              </tr>
              <tr>
                <td>Merk</td>
                <td>
                  <select class="form-control" name="merk" id="merk" required>
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
                <td><input class="form-control" type="number" name="stok_barang"></td>
              </tr>
              <tr>
                <td>Tanggal</td>
                <td><input class="form-control" type="date" id="datepicker" name="tanggal"></td>
              </tr>
              <tr>
                <td>Jumlah Barang</td>
                <td><input name="jumlah_barang" type ="number" class="form-control"></textarea></td>
              </tr>
              <tr>
                <td>Waktu Sewa</td>
                <td>
                <input class="form-control" type="time" name="waktu_sewa">
                </td>
              </tr>

              <tr>
              <td>Harga</td>
                <td>
                  <select class="form-control" name="harga" id="harga" required>
                    <option value="">--Pilih Harga--</option>
                    <option value="Rp 150.000">Rp 150.000</option>
                    <option value="Rp 200.000">Rp 200.000</option>
                    <option value="Rp 300.000">Rp 300.000</option>
                  </select>
                </td>
                </tr>

              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan">
                </td>
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