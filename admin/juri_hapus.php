<?php
include('koneksi.php');

$id_juri = $_GET['id_juri'];
$id_lomba = $_GET['id_lomba'];

$sql = "delete from juri_lomba where id_jurilomba = '$id_juri'";
$query = mysqli_query($link, $sql) or die(mysqli_error($link));

if($query) {
    header("location:lomba_details.php?id=$id_lomba");
} else {
    header("location:lomba_details.php?id=$id_lomba");
}

?>