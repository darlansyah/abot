<?php
session_start();
include('admin/koneksi.php');

$username = $_POST['email'];
$password = md5($_POST['password']);

$sql = "select * from users where email = '$username' and password = '$password' and kategori = 'peserta'";
$query = mysqli_query($link, $sql) or die(mysqli_error($link));

$num = mysqli_num_rows($query);

if ($num > 0) {

    $data = mysqli_fetch_array($query);

    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['nama'] = $data['nama'];

    header("location:index.php");
} else {
    header("location:login.php?pesan=Username atau password salah!");
}
?>
