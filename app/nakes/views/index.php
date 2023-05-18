<?php
require_once 'app/functions/MY_model.php';
$tenkes = get("SELECT * FROM tenkesehatans t
              INNER JOIN kategori_tenkesehatans kt ON t.kategori_tenkesehatan_id = kt.id
              INNER JOIN users u ON t.user_id = u.id;
            ");

$no = 1;

?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Data Tenaga Kesehatan</h4>
          <a href="?page=tambah-dokter" class="btn btn-primary round waves-effect waves-light"><i class="feather icon-plus-circle"></i>
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
                    <th>Kategori</th>
                    <th>TTL</th>
                    <th>No. HP</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($tenkes as $nakes) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $nakes['nama_tenkes']; ?></td>
                      <td><?= $nakes['nama_kategori_tenkes']; ?></td>
                      <td><?= $nakes['tempat_lhr_tenkes'];?>, <?= $nakes['tgl_lhr_tenkes'];?></td>
                      <td><?= $nakes['nohp_tenkes']; ?></td>
                      <td><?= $nakes['username']; ?></td>
                      <td><?= $nakes['alamat_tenkes']; ?></td>
                      <td><?= $nakes['jk_tenkes']; ?></td>
                      <td>
                        <a href="?page=edit-dokter&id=<?= $dokter['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-dokter&id=<?= $dokter['id']; ?>" class="btn-hapus">
                          <i class="feather icon-trash"></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
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