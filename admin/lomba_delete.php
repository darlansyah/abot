<?php
include('koneksi.php');

$id = $_GET['id'];

$sql = "delete from lomba where id_lomba = '$id'";
$query = mysqli_query($link, $sql) or die(mysqli_error($link));

if($query) {
    header("location:lomba.php");
} else {
    header('location:lomba.php');
}

?>