<?php
include('admin/koneksi.php');


$nama = $_POST['nama'];
$tanggal_lahir = date("Y-m-d", strtotime($_POST['tanggal_lahir']));
$alamat = $_POST['alamat'];
$handphone = $_POST['handphone'];
// $password = $_POST['password'];
$kategori = "peserta";
$id = $_POST['id'];

//-----------------------------------------
$foto_lama = $_POST['foto_lama'];
if(!empty ($_FILES['foto']['name'])){
  // echo "foto dimasukkan";
  // die;


  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  $fotobaru = date('dmYHis') . $foto;
  $path = "admin/upload/" . $fotobaru;

  if (move_uploaded_file($tmp, $path)) {

      //query update berdasarkan id lomba
      $sql = "UPDATE users SET
          nama = '$nama',
          tanggal_lahir = '$tanggal_lahir',
          foto_profil = '$fotobaru',
          alamat = '$alamat',
          no_hp = '$handphone'
          WHERE id_user = $id
          ";


      $query = mysqli_query($link, $sql) or die(mysqli_error($link));

      if ($query) {
        
          unlink("admin/upload/".$foto_lama);
          header("location:pengaturan_profil.php");
          
      } else {

          header('location:pengaturan_profil.php');
          
      }
  }


}
else{

  $sql = "UPDATE users SET
      nama = '$nama',
      tanggal_lahir = '$tanggal_lahir',
      alamat = '$alamat',
      no_hp = '$handphone'
      WHERE id_user = $id
      ";


  $query = mysqli_query($link, $sql) or die(mysqli_error($link));

  if ($query) {

      header("location:pengaturan_profil.php");
      // echo "berhasil update tanpa foto";
  } else {
      header('location:pengaturan_profil.php');
      // echo "gagal update tampa foto";
  }
}


?>
