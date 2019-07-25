<?php
include('koneksi.php');

$aksi = $_POST['aksi'];


$id_peserta = $_POST['id_peserta'];
 $id_lomba = $_POST['id_lomba'];
 $nilai = $_POST['nilai'];
 $id_juri = 13; // arumsi


// $juri_lomba  = "SELECT id_jurilomba FROM juri_lomba WHERE id_lomba = $id_lomba AND id_juri = $id_juri";
// $query_jl = mysqli_query($link,$juri_lomba);
// $id_jurilomba_f = mysqli_fetch_array($query_jl);
// $id_jurilomba = $id_jurilomba_f['id_jurilomba'];

// echo "id_jurilomba = ".$id_jurilomba ;
//
// echo "<br/> ";
//--------
$lomba_detail = "SELECT id_lombadetail FROM lomba_detail WHERE id_lomba = $id_lomba AND id_peserta = $id_peserta";
$query_ld = mysqli_query($link,$lomba_detail);
$id_lombadetail_f = mysqli_fetch_array($query_ld);
$id_lombadetail = $id_lombadetail_f['id_lombadetail'];
// echo "id_lombadetail = ".$id_lombadetail ;

// var_dump($id_lombadetail); die;

if ($aksi == "simpan") {
  $str_nilai = "INSERT INTO tb_nilai VALUES ('','$id_juri','$id_lombadetail','$nilai')";
  $queri_n = mysqli_query($link,$str_nilai);

  if ($queri_n) {
    echo "berhasil simpan";
  }
  else{
    echo "gagal simpan";
  }
}

if($aksi == "update"){
  $str_nilai = "UPDATE tb_nilai SET
                nilai = $nilai
                WHERE id_jurilomba = $id_juri
                AND id_lombadetail_nilai = $id_lombadetail";

  $queri_n = mysqli_query($link,$str_nilai);

  if ($queri_n) {
    echo "berhasil update";
  }
  else{
    echo "gagal update";
  }

}




 ?>
