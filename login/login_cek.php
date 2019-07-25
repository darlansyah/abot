<?php
include('../admin/koneksi.php');

$username = $_POST['user'];
$password = md5($_POST['pass']);
if (!empty( $_POST['kategori'])) {
  $kategori =  "juri";
}
else{
  $kategori = "admin";
}

$sql = "select * from users where email = '$username' and password = '$password' and kategori = '$kategori'";
$query = mysqli_query($link, $sql) or die(mysqli_error($link));

$num = mysqli_num_rows($query);

if ($num > 0) {

    $data = mysqli_fetch_array($query);
    if ($data['kategori'] == 'juri') {
      $_SESSION['id_user'] = $data['id_user'];
      $_SESSION['nama'] = $data['nama'];
      header('location:../juri/');

    }
    if ($data['kategori'] == 'admin') {
      // $_SESSION['id_user'] = $data['id_user'];
      // $_SESSION['nama'] = $data['nama'];
      // header('location:admin/')
      echo "admin";
    }


    // header("location:profil.php");
} else {
    // header("location:login.php?pesan=Username atau password salah!");
}
?>
