<?php
require_once 'app/functions/MY_model.php';
$apotekers = get("SELECT * FROM apotekers a
                INNER JOIN users u ON a.user_id = u.id;
                ");

$no = 1;
$title = 'profil';
?>

<!-- User Table -->
<?php
require_once 'app/functions/MY_model.php';
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
                    <h2 class="font-weight-bold">Ahmad Fauziannor</h2>
                    <div class="row">
                        <div class="col-md-6 col-15">
                            <div class="info-list">
                                <ul class="font-weight-bold">
                                    <li>Tanggal Lahir: 14 July 2000</li>
                                    <li>Tempat Lahir: Banjarmasin</li>
                                    <li>Alamat: Banjarmasin, RT 01 No 20</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="info-list">
                                <ul class="font-weight-bold">
                                    <li>Umur: 22 tahun</li>
                                    <li>Phone: <span class="text-primary">081256650942</span></li>
                                    <li>Jenis Kelamin: Laki-laki</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="https://sidik.ulm.ac.id/admin/edit/profil/1" class="btn btn-primary btn-sm">
                        <span>
                            <i class="fas fa-edit"></i>
                        </span>    
                        <span class="text">Ubah profil</span>
                    </a>&nbsp;
                    <a href="https://sidik.ulm.ac.id/admin/edit/username/1" class="btn btn-success btn-sm">
                        <span>
                            <i class="fas fa-edit"></i>
                        </span>
                        <span class="text">Ubah username</span>    
                    </a>&nbsp;
                    <a href="https://sidik.ulm.ac.id/admin/edit/password/1" class="btn btn-danger btn-sm">
                        <span>
                            <i class="fas fa-edit"></i>    
                        </span>
                        Ubah password
                    </a>
                    <!-- <a href="#edit-username" class="btn btn-success btn-sm" data-toggle="modal">
                        <span>
                            <i class="fas fa-edit"></i>
                        </span>
                        Ubah username
                    </a>&nbsp; -->
                    <!-- <a href="#edit-password" class="btn btn-danger btn-sm" data-toggle="modal">
                        <span>
                            <i class="fas fa-edit"></i>    
                        </span>
                        Ubah password
                    </a> -->
                </div>                    
            </div>
        </div>
    </div>
</div>
<!-- User Table -->
<?php $title = 'profil'; ?>