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

<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="?page=profil" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit Username</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
          <form action="?page=profil" method="post">
              <input type="hidden" name="id" value="<?php echo $pasien['id']; ?>">
              <div class="form-body">
                <div class="row">

    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="userDropdown">
        <form id="logout-form" action="?page=logout" method="POST">
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
<div class="about-row row">
<div class="detail-col col-md-12">
<form method="POST" action="app/profile/proses/update_username.php">                          
<div class="row">
<div class="col-md-3 col-12">
    <div class="info-list">
        <ul>
            <li>
                <label class="font-weight-bold text-primary">Username:</label>
                    <input type="text" name="username" class="form-control " value="<?= $row['username'] ?>" required>
            </li>
        </ul>
    </div>
</div>
<div class="col-md-3 col-12">
    <div class="info-list">
        <ul>
            <li>
                <label class="font-weight-bold text-primary">Password Lama:</label>
                   <input id="password-lama" type="password" name="current_password" class="form-control " autocomplete="current_password" required>    
            </li>
        </ul>
        
    </div>
</div>
</div>
<div class="row">
<div class="col-md-3">
    <input type="checkbox" class="form-control-input" onclick="showPassword()"> Tampilkan Password
</div>
</div><br>
<button type="submit" class="btn btn-success btn-sm">
<span>
    <i class="feather icon-check"></i>&nbsp;
</span>    
<span class="text">Simpan</span>
</button>&nbsp;
<a href="?page=profil" class="btn btn-secondary btn-sm">
<span>
    <i class="feather icon-x"></i>&nbsp;
</span>    
<span class="text">Batal</span>
</a>
</form>
</div>                    
</div>
</div>
</div>
</div>
<script>
function showPassword() {
var x = document.getElementById('password-lama');
var y = document.getElementById('password-baru');
var z = document.getElementById('password-baru-confirm');
if (x.type == "password" || y.type == "password" || z.type == "password") {
x.type = "text";
y.type = "text";
z.type = "text";
}
else {
x.type = "password";
y.type = "password";
z.type = "password";
}
}

function updateOnlyUsername() {
var y = document.getElementById('password-baru');
var z = document.getElementById('password-baru-confirm');

if(y.disabled == false) {
y.disabled = true;
z.disabled = true;
}
else {
y.disabled = false;
z.disabled = false;
}

}
</script>

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

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
<?php } ?>
</div)