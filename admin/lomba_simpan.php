<?php

include('koneksi.php');


$judul = $_POST['judul'];
$tanggal_daftar = date("Y-m-d", strtotime($_POST['tanggal_daftar']));
$tanggal_mulai = date("Y-m-d", strtotime($_POST['tanggal_mulai']));
$tanggal_selesai = date("Y-m-d", strtotime($_POST['tanggal_selesai']));
$biaya_daftar = $_POST['biaya_daftar'];
$deskripsi = $_POST['deskripsi'];
$status = $_POST['status'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$fotobaru = date('dmYHis') . $foto;
$path = "upload/" . $fotobaru;

if (move_uploaded_file($tmp, $path)) {

    $sql = "insert into lomba(judul,deskripsi,foto,tgl_daftar,tgl_mulai,tgl_selesai,biaya_lomba,status_lomba) values('$judul','$deskripsi','$fotobaru','$tanggal_daftar','$tanggal_mulai','$tanggal_selesai','$biaya_daftar','$status')";
    $query = mysqli_query($link, $sql) or die(mysqli_error($link));

    if ($query) {
        header("location:lomba.php");
    } else {
        header('location:lomba_tambah.php');
    }
} else {

}
?>
