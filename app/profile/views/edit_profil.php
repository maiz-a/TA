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
  <!-- End of Topbar -->
  <div class="container-fluid">
        <div class="card shadow mb-4">
        <div class="card-body">
            <div class="about-row row">
                <div class="detail-col col-md-12">
                    <form method="POST" enctype="multipart/form-data" action="?page=update">
                    <input type="hidden" name="_method" value="PATCH">                    <input type="hidden" name="_token" value="srGh4qnGikIiEuxyLtJFbjj0kZaP7UvSpcstB2oP">                    <div class="table-responsive"> 
                    <body onload="editPasien()">
                       
                        <table class="table table-borderless">
                            <tr>
                                <td><img src="app/img/logo-ulm1.png"></td>
                                <td class="text-center">
                                    <h6>KLINIK PRATAMA LAMBUNG MANGKURAT MEDICAL CENTER (LMMC)</h6>
                                    <h6>UNIVERSITAS LAMBUNG MANGKURAT</h6>
                                </td>
                                <td><img src="app/img/logo-klinik1.png"></td>
                            </tr>
                        </table>
                        <center><h5><u>BIODATA PASIEN</u></h5></center>
                        <table class="table table-borderless">
                            <tr>
                                <td>No. Indeks</td>
                                <td>:</td>
                                <td><?php echo $row['id']; ?></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="nama" class="form-control " value="<?php echo $row['nama_pasien']; ?>" required>
                                    <!--  -->
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td> 
                                    <select name="jk" class="form-control" required>
                                        <option value="Perempuan">Perempuan</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                                                            </select>
                                </td>
                            </tr>
                            <tr>
                                <td>TTL</td>
                                <td>:</td>
                                <td>
                                    <div class="row pl-3">
                                        <input type="text" class="form-control col-5 " name="tempat_lhr" value="" required>
                                       <!--   -->&ensp;
                                        <input type="date" class="form-control col-5 " name="tgl_lhr" value="1974-01-16" required>
                                        <!--  -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                  <td>Kategori</td>
                                <td>:</td>
                                <td>            
                                    <select class="form-control col " data-width="100%" name="category_id" id="category_id" onchange="ktg(this)" required>
                                        <option value="1">Dosen</option>
                                                                                    <option value="2">Karyawan</option>
                                                                                    <option value="3">Mahasiswa</option>
                                                                                    <option value="4">Umum</option>
                                                                                    <option value="5">BPJS</option>
                                                                            </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Fakultas</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control col " data-width="100%" name="fakulta_id" id="fakulta_id">
                                                                                    <option value="2">Hukum</option>
                                                                                    <option value="1">ULM</option>
                                                                                    <option value="2">Hukum</option>
                                                                                    <option value="3">Ilmu Sosial dan Politik</option>
                                                                                    <option value="4">Kedokteran</option>
                                                                                    <option value="5">Keguruan dan Ilmu Pendidikan</option>
                                                                                    <option value="6">Kehutanan</option>
                                                                                    <option value="7">Perikanan dan Kelautan</option>
                                                                                    <option value="8">Teknik</option>
                                                                                    <option value="9">Pertanian</option>
                                                                                    <option value="10">Ekonomi dan Bisnis</option>
                                                                                    <option value="11">Matematika dan Ilmu Pengetahuan Alam</option>
                                                                                    <option value="12">Kedektoran Gigi</option>
                                                                                    <option value="13">Pascasarjana</option>
                                                                                    <option value="14">Rektorat</option>
                                                                                    <option value="15">Kebersihan</option>
                                                                                    <option value="16">Perpustakaan</option>
                                                                                    <option value="17">Keamanan</option>
                                                                                    <option value="18">LP2M</option>
                                                                                    <option value="19">LMMC</option>
                                                                                    <option value="20">Lab. Bahasa</option>
                                                                                    <option value="21">Kopma</option>
                                                                                    <option value="22">IKA</option>
                                                                                    <option value="23">LP3</option>
                                                                            </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Program Studi</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control col " data-width="100%" name="prodi_id" id="prodi_id">
                                 </select>                    
                                </td>
                            </tr>
                            <tr id="bpjs" style="display: none;">
                                <td>No. BPJS</td>
                                <td>:</td>
                                <td>
                                <input type="text" name="no_bpjs" class="form-control ">
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat_pasien']; ?>"></td>
                            </tr>
                            <tr>
                                <td>No. HP</td>
                                <td>:</td>
                                <td><input type="text" class="form-control " name="no_hp" value="<?php echo $row['no_hp_pasien']; ?>"></td>
                            </tr>
                        </table>
                    
                    </body></div>
                    <button type="submit" class="btn btn-success btn-sm">
                        <span>
                            <i class="fas fa-check"></i>
                        </span>    
                        <span class="text">Simpan</span>
                    </button>&nbsp;
                    <a href="?page=update" class="btn btn-secondary btn-sm">
                        <span>
                            <i class="fas fa-times"></i>
                        </span>    
                        <span class="text">Batal</span>
                    </a>
                    </form>
                </div>                    
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://sidik.ulm.ac.id/public/js/dashboard/select2.min.js" defer></script>
<script>
    

    function ktg(select)
    {
        var f = document.getElementById('fakulta_id');
        var p = document.getElementById('prodi_id')

        if (select.value == 1 || select.value == 2) {
            f.disabled = false;
            p.disabled = true;
            $('#fakulta_id').select2()
            $('#bpjs').hide()
        }   
        else if (select.value == 3) {
            f.disabled = false
            p.disabled = false
            $('#fakulta_id').select2()
            $('#prodi_id').select2()
            $('#bpjs').hide()
        }
        else if (select.value == 4) {
            f.disabled = true
            p.disabled = true
            $('#bpjs').hide()
        }
        else if (select.value == 5) {
            $('#bpjs').show()
            f.disabled = true
            p.disabled = true
        }
    }
    function editPasien() {
        var k = document.getElementById('category_id');
        var f = document.getElementById('fakulta_id');
        var p = document.getElementById('prodi_id')

        $('#category_id').select2()
        $('#fakulta_id').select2()
        $('#prodi_id').select2()

        if (k.value == 1 || k.value == 2) {
            p.disabled = true;
        }   
        else if (k.value == 4) {
            f.disabled = true
            p.disabled = true
        }
        else if (k.value == 5) {
            $('#bpjs').show()
            f.disabled = true
            p.disabled = true
        }

        $('#fakulta_id').on('change', function() {
            var fakultasID = $(this).val();
            if(fakultasID) {
                $.ajax({
                    url: '/getProdi/'+fakultasID,
                    type: "GET",
                    data: {"_token":"srGh4qnGikIiEuxyLtJFbjj0kZaP7UvSpcstB2oP"},
                    dataType: "json",
                    success: function(data)
                    {
                        if(data){
                            $('#prodi_id').empty();
                            $.each(data, function(key, prodi){
                                $('select[name="prodi_id"]').append('<option value="'+ prodi.id +'">' + prodi.nama_prodi + '</option>');
                            });
                        } else {
                            $('#prodi_id').empty();
                        }
                    }
                });
            }
        });
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
        
    <!-- Bootstrap core JavaScript-->
    <script src="https://sidik.ulm.ac.id/public/vendor/dashboard/jquery.min.js"></script>
    <script src="https://sidik.ulm.ac.id/public/vendor/dashboard/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://sidik.ulm.ac.id/public/vendor/dashboard/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="https://sidik.ulm.ac.id/public/js/dashboard/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="https://sidik.ulm.ac.id/public/vendor/dashboard/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="https://sidik.ulm.ac.id/public/js/dashboard/demo/chart-area-demo.js"></script>
    <script src="https://sidik.ulm.ac.id/public/js/dashboard/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="https://sidik.ulm.ac.id/public/vendor/dashboard/datatables/jquery.dataTables.min.js"></script>
    <script src="https://sidik.ulm.ac.id/public/vendor/dashboard/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="https://sidik.ulm.ac.id/public/js/dashboard/demo/datatables-demo.js"></script>


<?php } ?>