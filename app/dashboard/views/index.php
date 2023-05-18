<?php
require_once 'app/functions/MY_model.php';

$nakes = mysqli_query($conn, "SELECT * FROM tenkesehatans");
$count_nakes = mysqli_num_rows($nakes);

$pasien = mysqli_query($conn, "SELECT * FROM pasiens");
$count_pasien = mysqli_num_rows($pasien);

$apoteker = mysqli_query($conn, "SELECT * FROM apotekers");
$count_apoteker = mysqli_num_rows($apoteker);

$rekam_medik = mysqli_query($conn, "SELECT * FROM rekam_mediks");
$count_rekam_medik = mysqli_num_rows($rekam_medik);

// $_SESSION['title'] = 'Dashboard';
?>
<!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
          <div class="avatar bg-rgba-primary p-50 m-0">
            <div class="avatar-content">
              <i class="feather icon-users text-primary font-medium-5"></i>
            </div>
          </div>
          <a href="?page=pasien" >
          <p class="mb-0" >Jumlah Pasien</p>
          <h2 class="text-bold-700 mt-1 mb-25"><?= $count_pasien; ?></h2>
          </a>
        </div>
        <div class="card-content">
          <!-- <div id="tenkes-chart"></div> -->
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
          <div class="avatar bg-rgba-success p-50 m-0">
            <div class="avatar-content">
              <i class="feather icon-users text-success font-medium-5"></i>
            </div>
          </div>
          <a href="?page=nakes">
          <p class="mb-0">Jumlah Tenaga Kesehatan</p>
          <h2 class="text-bold-700 mt-1 mb-25"><?= $count_nakes; ?></h2>
          </a>
        </div>
        <div class="card-content">
          <!-- <div id="pasien-chart"></div> -->
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
          <div class="avatar bg-rgba-success p-50 m-0">
            <div class="avatar-content">
              <i class="feather icon-users text-success font-medium-5"></i>
            </div>
          </div>
          <a href=""><p class="mb-0">Jumlah Apoteker</p>
          <h2 class="text-bold-700 mt-1 mb-25"><?= $count_apoteker; ?></h2>
          </a>
        </div>
        <div class="card-content">
          <!-- <div id="ruang-chart"></div> -->
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
          <div class="avatar bg-rgba-warning p-50 m-0">
            <div class="avatar-content">
              <i class="feather icon-package text-warning font-medium-5"></i>
            </div>
          </div> 
          <a href="?rekam-medis">
          <p class="mb-0">Rekam Medis</p>
          <h2 class="text-bold-700 mt-1 mb-25"><?= $count_rekam_medik; ?></h2>
          </a>
        </div>
        <div class="card-content">
          <!-- <div id="obat-chart"></div> -->
        </div>
      </div>
    </div>
  </div>
</section>

<div class="card shadow p-3">
            <div class="row">
                <p class="font-weight-bold text-primary col-3">Tanggal: <span class="text-success">14 May 2023</span></p>
                <p class="font-weight-bold text-primary col">Waktu: <span class="text-success">22:13:29</span></p>
            </div>
            <p class="font-weight-bold text-primary ">Jumlah pasien hari ini: <span class="text-success">0 orang</span></p>
            <form action="http://localhost:8080/aplikasi/aplikasi-klinik/index.php">
                <button class="btn btn-success btn-sm pl-2 pr-2" id="refresh"><i class="fas fa-sync-alt"></i> Refresh</button>
            </form><br>
            <h5 class="font-weight-bold text-primary">Daftar pasien hari ini:</h5>
                            <center><br><h5 class="text-info">Belum ada pasien hari ini</h5><br></center>
                    </div>
    </div>
<!-- Dashboard Analytics end -->
<script>
  var count_tenkes = '<?php echo $count_tenkes; ?>';
</script>
<?php
$addon_script = ['assets/vendors/js/charts/apexcharts.min.js', 'assets/js/pages/dashboard.js'];
$prepend_style = ['assets/css/pages/dashboard.css'];
?>
