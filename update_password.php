<!-- -- bikin form reset password
   inputan password baru

-- bikin actionnya kemana, misalnya action = "password_update.php"

-- di file password_update.php, tinggal buat query update -->

<?php

include('admin/koneksi.php');

$user_id = $_SESSION['id_user'];
$password = $_POST['password'];

$query = "Update users set password = md5('$password') where id_user = '$user_id'";
$update_p = mysqli_query($link, $query) or die(mysqli_error($link));

if($update_p){

	header('location:profil.php');

}else{

	header('location:pengaturan_password.php');
}
?>