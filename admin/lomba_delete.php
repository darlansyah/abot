<?php
include('koneksi.php');

$id = $_GET['id'];

$sql = "delete from users where id_user = '$id'";
$query = mysqli_query($link, $sql) or die(mysqli_error($link));

if($query) {
    header("location:user.php");
} else {
    header('location:user.php');
}

?>