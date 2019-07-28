<?php

include('koneksi.php');

$id = $_POST['id'];

$judul = $_POST['judul'];
$tanggal_daftar = date("Y-m-d", strtotime($_POST['tanggal_daftar']));
$tanggal_mulai = date("Y-m-d", strtotime($_POST['tanggal_mulai']));
$tanggal_selesai = date("Y-m-d", strtotime($_POST['tanggal_selesai']));
$biaya_daftar = $_POST['biaya_daftar'];
$deskripsi = $_POST['deskripsi'];
$status = $_POST['status_lomba'];
$foto_lama = $_POST['foto_lama'];



if(!empty ($_FILES['foto']['name'])){
  // echo "foto dimasukkan";
  // die;
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  $fotobaru = date('dmYHis') . $foto;
  $path = "upload/" . $fotobaru;

  if (move_uploaded_file($tmp, $path)) {

      //query update berdasarkan id lomba
      $sql = "UPDATE lomba SET
          judul = '$judul',
          deskripsi = '$deskripsi',
          foto = '$fotobaru',
          tgl_daftar = '$tanggal_daftar',
          tgl_mulai = '$tanggal_mulai',
          tgl_selesai = '$tanggal_selesai',
          biaya_lomba = $biaya_daftar,
          status_lomba = '$status'
          WHERE id_lomba = $id
          ";


      $query = mysqli_query($link, $sql) or die(mysqli_error($link));

      if ($query) {
          unlink("upload/".$foto_lama);
          header("location:lomba.php");
          // echo "berhasil ganti foto";
      } else {
          header('location:lomba_edit.php?id='.$id);
          // echo "gagal ganti foto";
      }
  }


}
else{
  // echo "foto tidak dimasukkan";
  // die;
  $sql = "UPDATE lomba SET
      judul = '$judul',
      deskripsi = '$deskripsi',
      tgl_daftar = '$tanggal_daftar',
      tgl_mulai = '$tanggal_mulai',
      tgl_selesai = '$tanggal_selesai',
      biaya_lomba = $biaya_daftar,
      status_lomba = '$status'
      WHERE id_lomba = $id
      ";


  $query = mysqli_query($link, $sql) or die(mysqli_error($link));

  if ($query) {

      header("location:lomba.php");
      // echo "berhasil update tanpa foto";
  } else {
      header('location:lomba_edit.php?id='.$id);
      // echo "gagal update tampa foto";
  }
}


?>
