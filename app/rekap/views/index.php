<?php
require_once 'app/functions/MY_model.php';

$tanggal = date('Y-m-d');
$query = "SELECT rm.*, t.nama_tenkes, p.category_id, c.nama_kategori, pro.nama_prodi, f.nama_fakultas, p.nama_pasien, p.tgl_lhr_pasien, p.jk_pasien, b.no_bpjs
          FROM rekam_mediks rm
          INNER JOIN pasiens p ON rm.pasien_id = p.id
          INNER JOIN tenkesehatans t ON rm.tenkesehatan_id = t.id
          LEFT JOIN categories c ON p.category_id = c.id
          LEFT JOIN mahasiswas m ON m.pasien_id = p.id
          LEFT JOIN dosens d ON d.pasien_id = p.id
          LEFT JOIN fakultas f ON (d.fakulta_id = f.id OR m.fakulta_id = f.id)
          LEFT JOIN prodis pro ON pro.fakulta_id = f.id AND pro.id = m.prodi_id
          LEFT JOIN bpjs b ON b.pasien_id = p.id";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['filter'])) {
  $startDate = $_POST['start'];
  $endDate = $_POST['end'];

  // Tambahkan kondisi filter tanggal ke query SQL
  $query .= " WHERE rm.rekammedik_created_at BETWEEN '$startDate' AND '$endDate'";

  // Eksekusi query dengan filter tanggal
  $result = mysqli_query($conn, $query);
}


$result = mysqli_query($conn, $query);


$no = 1;

$title = 'rekap';
?>

<!-- Basic tabs start -->
<section id="basic-tabs-components">
  <div class="card">
    <div class="card-body">
      <form class="form" method="post" action="">
        <div class="form-body">
          <div class="row">
            <div class="col">
                <label for="start">Start</label>
                <fieldset class="form-group">
                    <input type="date" name="start" class="form-control" required>
                </fieldset>
            </div>
            <div class="col">
            <label for="end">End</label>
                <fieldset class="form-group">
                    <input type="date" name="end" class="form-control" required>
                </fieldset>
            </div>
            <div class="col rslt-btn">
                <button type="submit" name="filter" class="btn mt-2 btn-outline-primary btn-icon btn-block text-uppercase waves-effect waves-light">Filter</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Data Rekam Medis Pasien</h4>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th></th>
                    <th>Nama</th>
                    <th>Tanggal Periksa</th>
                    <th>Pemeriksa</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
            

<?php while ($rm = mysqli_fetch_assoc($result)) : ?>

  <tr>
    <td><?= $no++ ?></td>
    <td><?= $rm['nama_pasien']; ?></td>
    <td><?= $rm['rekammedik_created_at']; ?></td>
    <td><?= $rm['nama_tenkes']; ?></td>
    <td><a href="?page=tambah-rekam-medis" class="btn btn-primary round waves-effect waves-light">
            Info
          </a></td>
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
<?php $title = 'rekap'; ?>