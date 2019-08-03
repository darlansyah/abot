<?php
$tanggal = date('y-m-d');


$tanggal = strtotime($tanggal);
$tgl_mulai = strtotime('2019-08-01');

$tgl_skg = strtotime('2019-08-06');// asumsi

$tgl_akhir = strtotime('2019-08-05');
$tgl_batas = strtotime('2019-08-08');


echo "tanggal sekarang = " . $tgl_akhir;
echo "<br/>";
echo "tanggal batas = " .$tgl_batas;
echo "<br/>";

$tgl_selisih = $tgl_batas - $tgl_akhir;
echo "tanggal selisih = " . $tgl_selisih; // 3 hari
echo "<br/>";


$tgl_akhir = $tgl_akhir + $tgl_selisih;
echo "tanggal lihat =  " .$tgl_akhir;
echo "<br/>";
echo $_SERVER['REMOTE_ADDR'];
die;
// $tgl_hasil = strtotime('2019-08-06');

// $time = time();
//
if ($tgl_skg < $tgl_akhir) {
  echo "penggumuan hasil lomba paling lambat 3 hari
   setelah tanggal selesai";
}
else {
  echo "lihat hasil";
}



 ?>
