<?php
// include('header.php');
include('admin/koneksi.php');

$id = $_POST['id'];
$id_user = $_SESSION['id_user'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$fotobaru = date('dmYHis') . $foto;
$path = "admin/upload/" . $fotobaru;

if (move_uploaded_file($tmp, $path)) {
    $sql = "update lomba_detail set foto_lomba = '$fotobaru'  where id_lomba = '$id' and id_peserta = '$id_user'";
    $query = mysqli_query($link, $sql) or die(mysqli_error($link));

    if ($query) {
		//	echo "berhasil";
      header("location:detail_lomba_user.php?id=$id");
    } else {
       header("location:pendaftaran_status.php?id=$id");
			//echo "gagal";
    }
	}

?>
