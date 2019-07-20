<?php
include('admin/koneksi.php');

$id =  $_GET['id'];
$id_peserta =  $_SESSION['id_user'];

$query = mysqli_query($link,"SELECT * FROM `lomba_detail` WHERE id_lomba = $id AND id_peserta = $id_peserta ");
$fetch_lomba_detail = mysqli_fetch_array($query);


echo " hello";

// var_dump($fetch_lomba_detail);
// die;

if(!empty( $_SESSION['id_user'] )){
  if(empty($fetch_lomba_detail['foto_bukti_pembayaran']) ){

    header('location:detail_lomba.php?id='.$id);
  }
  else if(empty($fetch_lomba_detail['foto_lomba']) ){
      header('location:detail_lomba_user.php?id='.$id);
  }
  else{
      header('location:detail_lomba_user.php?id='.$id);;
  }
}
else{
  header('location:detail_lomba.php?id='.$id);
}




//$query = mysqli

 ?>
