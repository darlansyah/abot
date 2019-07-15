<?php
include('admin/koneksi.php');

$id = $_GET['id'];

if (isset($_SESSION['id_user'])) {
    $id_user = $_SESSION['id_user'];
    
    $sql = "insert into lomba_detail(id_lomba,id_peserta,id_status)values('$id','$id_user','1')";
    $query = mysqli_query($link, $sql) or die(mysqli_error($link));
    
    if($query) {
        header('location:pendaftaran_status.php?id='.$id);
    } else {
        header('location:detail_lomba.php?id='.$id);
    }
} else {
    header('location:login.php?pesan=Anda harus login terlebih dahulu!');
}

?>
