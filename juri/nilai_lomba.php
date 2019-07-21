<?php
include('koneksi.php');


$id_peserta = $_POST['id_peserta'];
 $id_lomba = $_POST['id_lomba'];
 $nilai = $_POST['nilai'];
 $id_juri = 4; // arumsi


$juri_lomba  = "SELECT id_jurilomba FROM juri_lomba WHERE id_lomba = $id_lomba AND id_juri = $id_juri";
$query_jl = mysqli_query($link,$juri_lomba);
$id_jurilomba_f = mysqli_fetch_array($query_jl);
$id_jurilomba = $id_jurilomba_f['id_jurilomba'];

// echo "id_jurilomba = ".$id_jurilomba ;
//
// echo "<br/> ";
//--------
$lomba_detail = "SELECT id_lombadetail FROM lomba_detail WHERE id_lomba = $id_lomba AND id_peserta = $id_peserta";
$query_ld = mysqli_query($link,$lomba_detail);
$id_lombadetail_f = mysqli_fetch_array($query_ld);
$id_lombadetail = $id_lombadetail_f['id_lombadetail'];
// echo "id_lombadetail = ".$id_lombadetail ;



$str_nilai = "INSERT INTO tb_nilai VALUES ('','$id_jurilomba','$id_lombadetail','$nilai')";
$queri_n = mysqli_query($link,$str_nilai);

if ($queri_n) {
  echo "berhasil";
}
else{
  echo "gagal";
}

 ?>
