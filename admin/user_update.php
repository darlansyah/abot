<?php
include('koneksi.php');

$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggal_lahir = date("Y-m-d", strtotime($_POST['tanggal_lahir']));
$alamat = $_POST['alamat'];
$handphone = $_POST['handphone'];
$password = $_POST['password'];
$kategori = $_POST['kategori'];
$id = $_POST['id'];

if(!empty($password)) {
$sql = "update users set kategori='$kategori', nama='$nama', email = '$email', password = md5('$password'), tanggal_lahir = '$tanggal_lahir', alamat = '$alamat', no_hp = '$handphone' where id_user = '$id'";
} else {
$sql = "update users set kategori='$kategori', nama='$nama', email = '$email', tanggal_lahir = '$tanggal_lahir', alamat = '$alamat', no_hp = '$handphone' where id_user = '$id'";
}
$query = mysqli_query($link, $sql) or die(mysqli_error($link));

if($query) {
    header("location:user.php");
} else {
    header('location:user_edit.php?id='.$id);
}

?>