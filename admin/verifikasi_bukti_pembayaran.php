<?php
include ('koneksi.php');
$id =  $_GET['id'];
$id_lomba = $_GET['id_lomba'];
// var_dump($id);
// die;



$query = "UPDATE lomba_detaiL SET
          id_status = 3
          WHERE id_peserta = $id AND
                id_lomba = $id_lomba
          ";

if(mysqli_query($link,$query)){
  header('location:lomba_details.php?id='.$id_lomba);
}
else {
  echo "gagal";
}

 ?>
