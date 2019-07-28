<?php
include('admin/koneksi.php');

$id = $_POST['id'];
$id_user = $_SESSION['id_user'];
$eks_wajib = array('png','jpg','jpeg');

$foto = $_FILES['foto']['name'];
$x = explode('.',$foto);
$eks_foto = strtolower(end($x));


$ukuran_foto = $_FILES['foto']['size'];
// var_dump($ukuran_foto);
// die;

$tmp = $_FILES['foto']['tmp_name'];
$fotobaru = date('dmYHis') . $foto;
$path = "admin/upload/" . $fotobaru;

if (in_array($eks_foto,$eks_wajib) === true) {
  if ($ukuran_foto > 20000) {
    if (move_uploaded_file($tmp, $path)) {
        $sql = "update lomba_detail set foto_bukti_pembayaran = '$fotobaru', id_status = 2 where id_lomba = '$id' and id_peserta = '$id_user'";
        $query = mysqli_query($link, $sql) or die(mysqli_error($link));

        if ($query) {
            header("location:detail_lomba_user.php?id=$id");
        } else {
            header("location:pendaftaran_status.php?id=$id");
        }
    }
  }
  else{
    echo "terlalu besar (max 2MB)";
  }

}
else {
  echo "ekstensi foto salah (wajib : png,jpg,jpeg)";
}





?>
