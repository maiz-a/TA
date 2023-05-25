<?php
session_start();
require_once '../../functions/MY_model.php';

// Nama pengguna yang masuk

$username = $_SESSION['user'];

// Query untuk mengambil data pasien berdasarkan nama pengguna
$query = "SELECT p.*, u.username
          FROM pasiens p
          INNER JOIN users u ON p.user_id = u.id
          WHERE u.username = '" . $username['username'] . "'";

if ($_POST['username'] == $username['username'])
{
  echo '<script>document.location.href="../../../?page=edit_username";</script>';
}elseif (password_verify($_POST['current_password'], $username['password'])) {
  $query = "SELECT username FROM users WHERE username= '" . $_POST['username'] . "'";

  $user=get_where($query);
  if (is_null($user)){
    $query = "UPDATE users SET username = '" . $_POST['username'] ."' WHERE id = '" . $username['id'] . "'";
    if (update($query) === 1) {
      $_SESSION['user']['username'] = $_POST['username'];
      echo "<script>alert('sukses diubah');</script>";
      echo '<script>document.location.href="../../../?page=profil";</script>';
    } else {
      echo mysqli_error($conn);
    }
  }else {
    echo "<script>alert('Username Sudah dipakai');</script>";
    echo '<script>document.location.href="../../../?page=edit_username";</script>';
  }

  var_dump($user);die;
} else {
  echo "<script>alert('Password tidak sama');</script>";
  echo '<script>document.location.href="../../../?page=profil";</script>';
}

?>

