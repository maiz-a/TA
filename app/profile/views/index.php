<?php
require_once 'app/functions/MY_model.php';

// Nama pengguna yang masuk
$username = $_SESSION['user'];

// Query untuk mengambil data pasien berdasarkan nama pengguna
$query = "SELECT p.*, u.username
          FROM pasiens p
          INNER JOIN users u ON p.user_id = u.id
          WHERE u.username = '" . $username['username'] . "'";

$result = mysqli_query($conn, $query);

// Ambil hasil query
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

// Tampilkan data pasien
if ($row) {
    ?>
    <!-- User Table -->
    <section id="column-selectors">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Profil Pasien</h4>
            </div>
            <div class="container-fluid">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <div class="about-row row">
                    <div class="image-col col-md-4">
                      <img src="https://sidik.ulm.ac.id/public/foto_profil/admin/default.jpg" alt=""><br><br>
                    </div>
                    <div class="detail-col col-md-8">
                      <h2 class="font-weight-bold"><?php echo $row['nama_pasien']; ?></h2>
                      <div class="row">
                        <div class="col-md-6 col-15">
                          <div class="info-list">
                            <ul class="font-weight-bold">
                              <li>Tanggal Lahir: <?php echo $row['tgl_lhr_pasien']; ?></li>
                              <li>Tempat Lahir: <?php echo $row['tempat_lhr_pasien']; ?></li>
                              <li>Alamat: <?php echo $row['alamat_pasien']; ?></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-6 col-12">
                          <div class="info-list">
                            <ul class="font-weight-bold">
                              <li>Umur: <?= date_diff(date_create($row['tgl_lhr_pasien']), date_create())->y; ?> tahun</li>
                              <li>Phone: <span class="text-primary"><?php echo $row['no_hp_pasien']; ?></span></li>
                              <li>Jenis Kelamin: <?php echo $row['jk_pasien']; ?></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- User Table -->
    <?php
} else {
    echo "Data tidak ditemukan.";
}

$title = 'profil';
?>
