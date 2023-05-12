<?php
require_once 'app/functions/MY_model.php';
$diagnosas = get("SELECT * FROM diagnosas");

$no = 1;

?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Data Diagnosa</h4>
          <a href="?page=tambah-obat" class="btn btn-primary round waves-effect waves-light"><i class="feather icon-plus-circle"></i>
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
                    <th>Kode Diagnosa</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($diagnosas as $diagnosa) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $diagnosa['kode_diagnosa']; ?></td>
                      <td><?= $diagnosa['nama_diagnosa']; ?></td>
                      <td>
                        <a href="?page=edit-obat&id=<?= $obat['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-obat&id=<?= $obat['id']; ?>" class="btn-hapus"><i class="feather icon-trash"></i></a>
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
<?php $title = 'obat'; ?>