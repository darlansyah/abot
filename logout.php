<?php
include('admin/koneksi.php');

session_destroy();
header("location:login.php");

?>