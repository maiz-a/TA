<?php
require_once 'app/functions/MY_model.php';

// Nama pengguna yang masuk
$username = $_SESSION['user'];

// Query untuk mengambil data pasien berdasarkan nama pengguna
$query = "SELECT p.*, u.username, c.nama_kategori
          FROM pasiens p
          INNER JOIN users u ON p.user_id = u.id
          LEFT JOIN categories c ON p.category_id = c.id
          WHERE u.username = '" . $username['username'] . "'";

$result = mysqli_query($conn, $query);

// Ambil hasil query
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

// Tampilkan data pasien
if ($row) {

?>
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-dark bg-info topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i style="color: black" class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
            <div class="input-group">
                <h5 style="color: white"><b>Kartu Berobat</b></h5>
            </div>
        </div>
        <div class="topbar-divider d-none d-sm-block"></div>
    </nav>

            <div class="topbar-divider d-none d-sm-block"></div>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <form id="logout-form" action="logout.php" method="POST">
                    <input type="hidden" name="_token" value="jAO5yeyI1LMc2ScUMOvawk0lBHOBYbHyya5bRPId">
                    <button class="dropdown-item" type="submit">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->
            <div class="container-fluid">
<div class="card shadow mb-4">
<div class="card-body">
     <a href="app/kartu_berobat/cetak_kartu.php" target="_blank" class="btn btn-success btn-sm"><i class="feather icon-printer"></i>&nbsp;Cetak Kartu Berobat</a><br><br>
    <div class="table-responsive">
        <center>
            <table class="table table-borderless col-8">
                <thead>
                    <tr class="text-center border border-dark">
                        <th><img src="app/img/logo-ulm1.png"></th>
                        <th>
                            <h4 class="font-weight-bold">KARTU BEROBAT</h4>
                            <h5 class="font-weight-bold">KLINIK PRATAMA</h5>
                            <h6 class="font-weight-bold">LAMBUNG MANGKURAT MEDICAL CENTER (LMMC)</h6>
                        </th>
                        <th><img src="app/img/logo-klinik1.png"></th>
                    </tr>
                </thead>
                <tbody class="border border-dark text-uppercase">
                    <tr>
                        <td></td>
                        <td>nama<span class="text-center">:</span>&nbsp;<?php echo $row['nama_pasien']; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>indeks<span class="text-center">:</span>&nbsp;<?php echo $row['id'];?>/<?php echo $row['nama_kategori']; ?> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>umur<span class="text-center">:</span>&nbsp;<?= date_diff(date_create($row['tgl_lhr_pasien']), date_create())->y; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>alamat<span class="text-center">:</span>&nbsp;<?php echo $row['alamat_pasien']; ?></td>
                    </tr>
                </tbody>
            </table>
        </center>
    </div>
                </div>
</div>
</div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; SIDIK 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php
} else {
    echo "Data tidak ditemukan.";
}

$title = 'kartu_berobat';
