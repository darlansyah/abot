<?php
include('koneksi.php');

$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggal_lahir = date('Y-m-d', strtotime($_POST['tanggal_lahir']));
$alamat = $_POST['alamat'];
$handphone = $_POST['handphone'];
$password = $_POST['password'];
$kategori = $_POST['kategori'];

$sql = "insert into users(kategori,nama,email,password,tanggal_lahir,alamat,no_hp) values('$kategori','$nama','$email',md5('$password'),'$tanggal_lahir','$alamat','$handphone')";
$query = mysqli_query($link, $sql) or die(mysqli_error($link));

if($query) {
    header("location:user.php");
} else {
    header('location:user_tambah.php');
}

?>