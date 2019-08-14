<?php
include('koneksi.php');
if (!isset($_SESSION['id_user'])) {
        header("location:../login/");
        exit;
}
$aksi = $_POST['aksi'];


$id_peserta = $_POST['id_peserta'];
$id_lomba = $_POST['id_lomba']; // id_lomba
$nilai = $_POST['nilai'];

$id_juri = $_SESSION['id_user'];
$id_jurilomba =  id_jurilomba($id_lomba,$id_juri);

$lomba_detail = "SELECT id_lombadetail FROM lomba_detail WHERE id_lomba = $id_lomba AND id_peserta = $id_peserta";
$query_ld = mysqli_query($link,$lomba_detail);
$id_lombadetail_f = mysqli_fetch_array($query_ld);
$id_lombadetail = $id_lombadetail_f['id_lombadetail'];


if ($aksi == "simpan") {
  $str_nilai = "INSERT INTO tb_nilai VALUES ('','$id_jurilomba','$id_lombadetail','$nilai')";
  $queri_n = mysqli_query($link,$str_nilai);

  if ($queri_n) {
    header('location:penilaian_details.php?id='.$id_lomba);
  }
  else{
    header('location:nilai.php?id='.$id_lomba);
  }
}

if($aksi == "update"){
  $str_nilai = "UPDATE tb_nilai SET
                nilai = $nilai
                WHERE id_jurilomba = $id_jurilomba
                AND id_lombadetail_nilai = $id_lombadetail";

  $queri_n = mysqli_query($link,$str_nilai);

  if ($queri_n) {
    header('location:penilaian_details.php?id='.$id_lomba);
  }
  else{
    echo header('location:nilai.php?id='.$id_lomba);
  }

}




 ?>
