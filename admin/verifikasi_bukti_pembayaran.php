<?php
include ('koneksi.php');
$id =  $_GET['id'];
$id_lomba = $_GET['id_lomba'];




$query = "UPDATE lomba_detaiL SET
          id_status = 3
          WHERE id_lombadetail = $id
          ";

if(mysqli_query($link,$query)){
  header('location:lomba_details.php?id='.$id_lomba);
}
else {
  echo "gagal";
}

 ?>
