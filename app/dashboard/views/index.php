<?php
require_once 'app/functions/MY_model.php';

$tenkes = mysqli_query($conn, "SELECT * FROM tenkesehatans");
$count_tenkes = mysqli_num_rows($tenkes);

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
          <h2 class="text-bold-700 mt-1 mb-25"><?= $count_tenkes; ?></h2>
          <p class="mb-0">Tenaga Kesehatan 1</p>
        </div>
        <div class="card-content">
          <!-- <div id="tenkes-chart"></div> -->
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
          <div class="avatar bg-rgba-primary p-50 m-0">
            <div class="avatar-content">
              <i class="feather icon-users text-primary font-medium-5"></i>
            </div>
          </div>
          <h2 class="text-bold-700 mt-1 mb-25"><?= $count_pasien; ?></h2>
          <p class="mb-0">Pasien</p>
        </div>
        <div class="card-content">
          <!-- <div id="pasien-chart"></div> -->
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
          <div class="avatar bg-rgba-primary p-50 m-0">
            <div class="avatar-content">
              <i class="feather icon-users text-primary font-medium-5"></i>
            </div>
          </div>
          <h2 class="text-bold-700 mt-1 mb-25"><?= $count_apoteker; ?></h2>
          <p class="mb-0">Apoteker</p>
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
          <h2 class="text-bold-700 mt-1 mb-25"><?= $count_rekam_medik; ?></h2>
          <p class="mb-0">Rekam Medik</p>
        </div>
        <div class="card-content">
          <!-- <div id="obat-chart"></div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Dashboard Analytics end -->
<script>
  var count_tenkes = '<?php echo $count_tenkes; ?>';
</script>
<?php
$addon_script = ['assets/vendors/js/charts/apexcharts.min.js', 'assets/js/pages/dashboard.js'];
$prepend_style = ['assets/css/pages/dashboard.css'];
?>
