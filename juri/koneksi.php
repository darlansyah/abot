<?php
session_start();
$link = @mysqli_connect("localhost", "root", "", "db_fotografi");

if(!$link) {
    echo "Tidak bisa konek dengan database";
}


function id_jurilomba($id_lomba,$id_juri){
global $link;

$str_query = "SELECT * FROM juri_lomba
              WHERE id_lomba = $id_lomba AND id_juri = $id_juri";

$query = mysqli_query($link,$str_query);

$data = mysqli_fetch_assoc($query);

return $data['id_jurilomba'];

}
?>
