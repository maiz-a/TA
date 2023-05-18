<?php
require_once 'app/functions/MY_model.php';

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
                <h5 style="color: white"><b>Kartu Berobat Pasien</b></h5>
            </div>
        </div>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <small><a class="nav-link" href="http://sidik.test">
                <i class="fas fa-reply"></i>&nbsp; Ke Beranda</a></small>
            </li>

            <!-- Nav Item - Alerts -->
                

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-white-600 small"><b>
                                                                                                                                $2a$10$0Jbgc1hGv4VcmbGjy/l0SOjwgCnuas9k6Golw/Kitv3wgFpLFGBjC 
                                                                                        </b></span>
                                <img class="img-profile rounded-circle" src="http://sidik.test/foto_profil/pasien">
<!-- <img class="img-profile rounded-circle" src="http://sidik.test/img/klinik.png"> -->
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <form id="logout-form" action="http://sidik.test/logout" method="POST">
                    <input type="hidden" name="_token" value="jAO5yeyI1LMc2ScUMOvawk0lBHOBYbHyya5bRPId">                                    <button class="dropdown-item" type="submit">
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
                    <a href="http://sidik.test/pasien/print/kartuberobat/3756" target="_blank" class="btn btn-success btn-sm"><i class="fas fa-print"></i>&nbsp;Cetak Kartu Berobat</a><br><br>
    <div class="table-responsive">
        <center>
            <table class="table table-borderless col-8">
                <thead>
                    <tr class="text-center border border-dark">
                        <th><img src="http://sidik.test/img/logo-ulm1.png"></th>
                        <th>
                            <h4 class="font-weight-bold">KARTU BEROBAT</h4>
                            <h5 class="font-weight-bold">KLINIK PRATAMA</h5>
                            <h6 class="font-weight-bold">LAMBUNG MANGKURAT MEDICAL CENTER (LMMC)</h6>
                        </th>
                        <th><img src="http://sidik.test/img/logo-klinik1.png"></th>
                    </tr>
                </thead>
                <tbody class="border border-dark text-uppercase">
                    <tr>
                        <td></td>
                        <td>nama<span class="text-center">:</span>&nbsp;$2a$10$0Jbgc1hGv4VcmbGjy/l0SOjwgCnuas9k6Golw/Kitv3wgFpLFGBjC </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>indeks<span class="text-center">:</span>&nbsp;3493 / Umum </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>umur<span class="text-center">:</span>&nbsp;0 tahun</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>alamat<span class="text-center">:</span>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </center>
    </div>
                </div>
</div>
</div>