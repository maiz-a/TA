<?php
require_once 'app/functions/MY_model.php';
$apotekers = get("SELECT * FROM apotekers a
                INNER JOIN users u ON a.user_id = u.id;
                ");

$no = 1;

?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Data Apoteker</h4>
          <a href="?page=tambah-ruang" class="btn btn-primary round waves-effect waves-light"><i class="feather icon-plus-circle"></i>
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
                    <th>No. HP</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($apotekers as $apoteker) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $apoteker['nama_apoteker']; ?></td>
                      <td><?= $apoteker['tempat_lhr_apoteker'];?>, <?= $apoteker['tgl_lhr_apoteker'];?></td>
                      <td><?= $apoteker['nohp_apoteker']; ?></td>
                      <td><?= $apoteker['username']; ?></td>
                      <td><?= $apoteker['alamat_apoteker']; ?></td>
                      <td><?= $apoteker['jk_apoteker']; ?></td>
                      <td>
                        <a href="?page=edit-ruang&id=<?= $apoteker['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-ruang&id=<?= $apoteker['id']; ?>" class="btn-hapus"><i class="feather icon-trash"></i></a>
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
<?php $title = 'ruang'; ?>