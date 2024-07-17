<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM booking");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Daftar Pemesanan</h1>
    <a href="./create.php" class="btn btn-primary">Tambah Data</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr>
                  <th>ID Pesanan</th>
                  <th>Username</th>
                  <th>Jumlah Tenda</th>
                  <th>Harga Tenda</th>
                  <th>No Telepon Pelanggan</th>
                  <th>Tanggal Pemesanan</th>
                  <th style="width: 150px">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($data = mysqli_fetch_array($result)) : ?>
                  <tr>
                    <td><?= htmlspecialchars($data['id_pesanan']) ?></td>
                    <td><?= htmlspecialchars($data['username']) ?></td>
                    <td><?= htmlspecialchars($data['jumlah_tenda']) ?></td>
                    <td><?= htmlspecialchars($data['harga_tenda']) ?></td>
                    <td><?= htmlspecialchars($data['no_phone_customer']) ?></td>
                    <td><?= htmlspecialchars($data['tanggal_pemesanan']) ?></td>
                    <td>
                      <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?id_pesanan=<?= urlencode($data['id_pesanan']) ?>">
                        <i class="fas fa-trash fa-fw"></i>
                      </a>
                      <a class="btn btn-sm btn-info" href="edit.php?id_pesanan=<?= urlencode($data['id_pesanan']) ?>">
                        <i class="fas fa-edit fa-fw"></i>
                      </a>
                    </td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>

<!-- Page Specific JS File -->
<?php if (isset($_SESSION['info'])): ?>
  <?php if ($_SESSION['info']['status'] == 'success'): ?>
    <script>
      iziToast.success({
        title: 'Sukses',
        message: `<?= htmlspecialchars($_SESSION['info']['message']) ?>`,
        position: 'topCenter',
        timeout: 5000
      });
    </script>
  <?php else: ?>
    <script>
      iziToast.error({
        title: 'Gagal',
        message: `<?= htmlspecialchars($_SESSION['info']['message']) ?>`,
        timeout: 5000,
        position: 'topCenter'
      });
    </script>
  <?php endif; ?>

  <?php
  unset($_SESSION['info']);
  $_SESSION['info'] = null;
  ?>
<?php endif; ?>

<script src="../assets/js/page/modules-datatables.js"></script>
