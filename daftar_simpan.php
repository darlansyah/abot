<?php

include('admin/koneksi.php');

$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggal_lahir = date("Y-m-d", strtotime($_POST['tanggal_lahir']));
$alamat = $_POST['alamat'];
$handphone = $_POST['handphone'];
$password = $_POST['password'];
$kategori = 'peserta';

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$fotobaru = date('dmYHis') . $foto;
$path = "admin/upload/" . $fotobaru;

if (move_uploaded_file($tmp, $path)) {
    $sql = "insert into users(kategori,nama,email,password,tanggal_lahir,alamat,no_hp,foto_profil) values('$kategori','$nama','$email',md5('$password'),'$tanggal_lahir','$alamat','$handphone','$fotobaru')";
    $query = mysqli_query($link, $sql) or die(mysqli_error($link));

    if ($query) {
        header("location:daftar.php?pesan=Pendaftaran berhasil");
    } else {
        header('location:daftar.php?pesan=Pendaftaran gagal');
    }
}
?>