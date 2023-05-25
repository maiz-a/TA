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
    
    <!-- End of Topbar -->
        <div class="container-fluid">
<div class="card shadow mb-4">         
<div class="card-body">
    
    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tr>
                                <td><img src="app/img/logo-ulm1.png"></td>
                                <td class="text-center">
                                    <h6>KLINIK PRATAMA LAMBUNG MANGKURAT MEDICAL CENTER (LMMC)</h6>
                                    <h6>UNIVERSITAS LAMBUNG MANGKURAT</h6>
                                </td>
                                <td class="float-right"><img src="app/img/logo-klinik1.png"></td>
                            </tr>
                        </table>
                        <center><h5><u>KARTU RAWAT JALAN</u></h5></center>
                                                            <table class="font-weight-bold">
                            <tr>
                                <td>No. Indeks</td>
                                <td>&emsp;: <?php echo $row['id']; ?></td>
                            </tr>
                            <tr style="padding: 2px;">
                                <td>Nama</td>
                                <td>&emsp;: <?php echo $row['nama_pasien']; ?> </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>&emsp;: <?php echo $row['jk_pasien']; ?> </td>
                            </tr>
                            <tr>
                                <td>TTL</td>
                                <td>&emsp;: <?php echo $row['tempat_lhr_pasien']; ?>, <?php echo $row['tgl_lhr_pasien']; ?></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td>
                                    &emsp;: <?php echo $row['nama_kategori']; ?>
                                                                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>&emsp;: <?php echo $row['alamat_pasien']; ?></td>
                            </tr>
                            <tr>
                                <td>No. HP</td>
                                <td>&emsp;: <?php echo $row['no_hp_pasien']; ?></td>
                            </tr>
                        </table>
                                                            <br>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>TANGGAL PEMERIKSAAN</th>
                                    <th>PEMERIKSAAN/DIAGNOSA</th>
                                    <th>PENGOBATAN</th>
                                    <th>KETERANGAN</th>
                                    <th>PARAF</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                                                                    </tbody>
                        </table>
                    </div>
</div>
</div>
</div>

</div>
<!-- End of Main Content -->

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

$title = 'riwayat';
?>