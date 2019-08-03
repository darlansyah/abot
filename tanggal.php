<?php
$tanggal = date('y-m-d');

$tanggal = strtotime($tanggal);
$tgl_mulai = strtotime('2019-08-01');
$tgl_skg = strtotime('2019-08-02');
$tgl_akhir = strtotime('2019-08-05');

$time = time();

var_dump($tgl_skg);
echo "<br/>";
var_dump($tanggal);
die;


if ($tgl_skg < $tgl_akhir) {
  echo "bisa upload";
}
else{
  echo "tidak bisa upload";
}

 ?>
