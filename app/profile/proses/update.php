<?php
require_once 'app/functions/MY_model.php';

// Nama pengguna yang masuk
$username = $_SESSION['user'];

// Query untuk mengambil data pasien berdasarkan nama pengguna
$query = "SELECT p.*, u.username
          FROM pasiens p
          INNER JOIN users u ON p.user_id = u.id
          WHERE u.username = '" . $username['username'] . "'";


  $id = $_POST['id'];
  $nama_pasien = $_POST['nama_pasien'];
  $tempat_lhr_pasien = $_POST['tempat_lhr_pasien'];
  $tgl_lhr_pasien = $_POST['tgl_lhr_pasien'];
  $alamat_pasien = $_POST['alamat_pasien'];
  $no_hp_pasien = $_POST['no_hp_pasien'];
  $jk_pasien = $_POST['jk_pasien'];
  $updated_at = date('Y-m-d H:i:s');
  $updated_by = $_SESSION['user']['id'];

  if(isset($_POST['submit'])) {
    extract($_POST);
    $nama_file = $_FILES['foto_pasien']['name'];

    if(!empty($nama_file)){
      //baca lokasi file sementara dan  nama file dari form input (fupload)
      $lokasi_file = $_FILES['foto_pasien']['tmp_name'];
      $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
      $file_foto = $id.".".$tipe_file;

      //tentukan folder untuk menyimpan file
      $folder = "./foto_profil/$file_foto";
      @unlink ("$folder");
      // Apabila file berhasil di upload
      move_uploaded_file($lokasi_file, "$folder");
      }
      else
        $file_foto="$foto_awal";
  
  $query = "UPDATE pasiens SET nama_pasien = '$nama_pasien', tempat_lhr_pasien = '$tempat_lhr_pasien', tgl_lhr_pasien = '$tgl_lhr_pasien',
            alamat_pasien = '$alamat_pasien', no_hp_pasien = '$no_hp_pasien', jk_pasien = '$jk_pasien', foto_pasien='$file_foto, updated_at = '$updated_at', updated_by = '$updated_by'
            WHERE id = '$id'";

  header("?page=profil");
}?>

