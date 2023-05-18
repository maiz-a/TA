<?php 
require_once 'app/functions/MY_model.php';
// Query untuk mendapatkan data pasien
$query = "SELECT p.*, u.username, c.nama_kategori, pro.nama_prodi, f.nama_fakultas, b.no_bpjs
          FROM pasiens p
          INNER JOIN users u ON p.user_id = u.id
          LEFT JOIN categories c ON p.category_id = c.id
          LEFT JOIN mahasiswas m ON m.pasien_id = p.id
          LEFT JOIN dosens d ON d.pasien_id = p.id
          LEFT JOIN fakultas f ON (d.fakulta_id = f.id OR m.fakulta_id = f.id)
          LEFT JOIN prodis pro ON pro.fakulta_id = f.id AND pro.id = m.prodi_id
          LEFT JOIN bpjs b ON b.pasien_id = p.id;
          ";

$result = mysqli_query($conn, $query);

$no = 1;

$title = 'pasien';
?>


<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Data Pasien</h4>
          <a href="?page=tambah-pasien" class="btn btn-primary round waves-effect waves-light"><i class="feather icon-plus-circle"></i>
            Tambah
          </a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th></th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Kategori</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Username</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php while ($pasien = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $pasien['nama_pasien']; ?></td>
        <td><?= $pasien['tempat_lhr_pasien']; ?>, <?= $pasien['tgl_lhr_pasien'];?></td>
        <td>
            <?= $pasien['nama_kategori']; ?>

            <?php if ($pasien['category_id'] == 1 && isset($pasien['nama_fakultas'])): ?>
                <?= $pasien['nama_fakultas']; ?>
            <?php elseif ($pasien['category_id'] == 3 && isset($pasien['nama_fakultas']) && isset($pasien['nama_prodi'])): ?>
                <?= $pasien['nama_fakultas']; ?> - <?= $pasien['nama_prodi']; ?>
            <?php elseif ($pasien['category_id'] == 5 && isset($pasien['no_bpjs'])) : ?>
                <?= $pasien['no_bpjs']; ?>
            <?php endif; ?>
        </td>
        <td><?= $pasien['alamat_pasien']; ?></td>
        <td><?= $pasien['no_hp_pasien']; ?></td>
        <td><?= $pasien['username']; ?></td>
        <td>
            <a href="?page=edit-pasien&id=<?= $pasien['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
            <a href="?page=hapus-pasien&id=<?= $pasien['id']; ?>" class="btn-hapus">
                <i class="feather icon-trash"></i>
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
    </div>
  </div>
</section>
<!-- User Table -->
<?php $title = 'pasien'; ?>