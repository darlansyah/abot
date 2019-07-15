<?php

include('koneksi.php');

$id_lomba = $_POST['id_lomba'];
$id_juri = $_POST['juri'];

mysqli_query($link, "delete from juri_lomba where id_lomba = '$id_lomba'");

for ($i = 0; $i < count($id_juri); $i++) {
    $juri = $id_juri[$i];
    $sql = "insert into juri_lomba(id_lomba,id_juri) values('$id_lomba','$juri')";
    $query = mysqli_query($link, $sql) or die(mysqli_error($link));
}

if ($query) {
    header("location:lomba_details.php?id=$id_lomba");
} else {
    header("location:lomba_details.php?id=$id_lomba");
}
?>