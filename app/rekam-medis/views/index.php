<?php
require_once 'app/functions/MY_model.php';

$query = "SELECT rm.*, p.category_id, c.nama_kategori, pro.nama_prodi, f.nama_fakultas, p.nama_pasien, p.tgl_lhr_pasien, p.jk_pasien, b.no_bpjs
          FROM rekam_mediks rm
          INNER JOIN pasiens p ON rm.pasien_id = p.id
          INNER JOIN tenkesehatans t ON rm.tenkesehatan_id = t.id
          LEFT JOIN categories c ON p.category_id = c.id
          LEFT JOIN mahasiswas m ON m.pasien_id = p.id
          LEFT JOIN dosens d ON d.pasien_id = p.id
          LEFT JOIN fakultas f ON (d.fakulta_id = f.id OR m.fakulta_id = f.id)
          LEFT JOIN prodis pro ON pro.fakulta_id = f.id AND pro.id = m.prodi_id
          LEFT JOIN bpjs b ON b.pasien_id = p.id";

$result = mysqli_query($conn, $query);


$no = 1;
$title = 'rekam_medik';
?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Rekam Medis</h4>
          <a href="?page=tambah-rekam-medis" class="btn btn-primary round waves-effect waves-light">
            Tambah Rekam Medis
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
                    <th>Umur</th>
                    <th>Kategori</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
            

<?php while ($rm = mysqli_fetch_assoc($result)) : ?>

  <tr>
    <td><?= $no++ ?></td>
    <td><?= $rm['nama_pasien']; ?></td>
    <td><?= date_diff(date_create($rm['tgl_lhr_pasien']), date_create())->y; ?> tahun</td>
    <td>
            <?= $rm['nama_kategori']; ?>
            <?php if ($rm['category_id'] == 1 && isset($rm['nama_fakultas'])): ?>
                <?= $rm['nama_fakultas']; ?>
            <?php elseif ($rm['category_id'] == 3 && isset($rm['nama_fakultas']) && isset($rm['nama_prodi'])): ?>
                <?= $rm['nama_fakultas']; ?> - <?= $rm['nama_prodi']; ?>
            <?php elseif ($rm['category_id'] == 5 && isset($rm['no_bpjs'])) : ?>
                <?= $rm['no_bpjs']; ?>
            <?php endif; ?>
        </td>

    <td><?= $rm['jk_pasien']; ?></td>

    <td>
      <a href="?page=edit-rekam-medis&id=<?= $rm['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
      <a href="?page=hapus-rekam-medism&id=<?= $rm['id']; ?>" class="btn-hapus">
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
<?php $title = 'rekam_medik'; ?>
