<?php
session_start();
$link = @mysqli_connect("localhost", "root", "", "db_fotografi");

if(!$link) {
    echo "Tidak bisa konek dengan database";
}


?>
