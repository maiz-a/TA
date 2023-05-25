<?php
session_start();
require_once '../functions/MY_model.php';

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

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title><?= (isset($_SESSION['title']) ? $_SESSION['title'] : 'Admin'); ?></title>

  <link rel="stylesheet" type="text/css" href="../../assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">


      <center>
 <table class="table table-borderless col-8">
                <thead>
                    <tr class="text-center border border-dark">
                        <th><img src="../img/logo-ulm1.png"></th>
                        <th>
                            <h4 class="font-weight-bold">KARTU BEROBAT</h4>
                            <h5 class="font-weight-bold">KLINIK PRATAMA</h5>
                            <h6 class="font-weight-bold">LAMBUNG MANGKURAT MEDICAL CENTER (LMMC)</h6>
                        </th>
                        <th><img src="../img/logo-klinik1.png"></th>
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
    <script>
    window.print();
    </script>



</body>
<!-- END: Body-->

</html>



