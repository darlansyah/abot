<?php
include('header.php');
 // include('koneksi.php');

$id = $_GET['id']; // mengambil variable ID Lomba
$id_juri = 2; // asumsi
$id_jurilomba = 13; // asumsi

// daftar id_juri :
// - 4

// membuat query untuk menampilkan detail sesuai dengan ID Lomba
$query_lomba = mysqli_query($link, "select * from lomba where id_lomba = '$id'");
$data_lomba = mysqli_fetch_array($query_lomba);




// lomba dettail 01
// $lomba_detail = "SELECT tb_nilai.*, lomba_detail.*, users.nama FROM lomba_detail
//                 LEFT JOIN tb_nilai ON lomba_detail.id_lombadetail = tb_nilai.id_lombadetail_nilai
//                 INNER JOIN users ON lomba_detail.id_peserta = users.id_user
//                 WHERE lomba_detail.id_lomba = $id ";

$lomba_detail = "SELECT tb_nilai.*, lomba_detail.*, users.nama FROM lomba_detail
                LEFT JOIN tb_nilai ON lomba_detail.id_lombadetail = tb_nilai.id_lombadetail_nilai AND tb_nilai.id_jurilomba = $id_jurilomba
                INNER JOIN users ON lomba_detail.id_peserta = users.id_user
                WHERE lomba_detail.id_lomba = $id";

$query_lomba_detail = mysqli_query($link,$lomba_detail);

// $fetch = mysqli_fetch_array($query_lomba_detail);
// var_dump(count($fetch['id_lombadetail'] == 13));
// die;
// AND count($data_lomba_detail['id_lombadateil_nilai']) = 1
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Detail Lomba
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>Judul </td>
                        <td><?php echo $data_lomba['judul'];?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Mulai </td>
                        <td><?php echo $data_lomba['tgl_mulai'];?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Selesai </td>
                        <td><?php echo $data_lomba['tgl_selesai'];?></td>
                    </tr>

                </table>
            </div>
            <!-- /.box-body -->
        </div>

    </section>
    <!-- /.content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Peserta
        </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Nilai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      while ($data_lomba_detail = mysqli_fetch_array($query_lomba_detail)) {

                        if (!empty($data_lomba_detail['foto_lomba'])) {
                            ?>
                            <?php if ($data_lomba_detail['id_jurilomba']){ ?>

                              <tr>
                                  <td><?= $data_lomba_detail['nama'] ?></td>
                                  <td><img width="80" height="80"src="../admin/upload/<?php echo $data_lomba_detail['foto_lomba']; ?>" alt=""></td>

                                <td><?= $data_lomba_detail['nilai'] ?></td>
                                  <td>
                                      <div class="btn-group">
                                          <a href="nilai.php?id=<?= $id ?>&id_peserta=<?=$data_lomba_detail['id_peserta'] ?> " class="btn btn-default btn-sm"  class="link-button">Ubah Nilai</a>
                                      </div>
                                  </td>
                              </tr>
                            <?php
                          }
                          else{
                            ?>
                            <tr>
                                <td><?= $data_lomba_detail['nama'] ?></td>
                                <td><img width="80" height="80"src="../admin/upload/<?php echo $data_lomba_detail['foto_lomba']; ?>" alt=""></td>

                              <td>kosong</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="nilai.php?id=<?= $id ?>&id_peserta=<?=$data_lomba_detail['id_peserta'] ?> " class="btn btn-default btn-sm"  class="link-button">Beri Nilai</a>
                                    </div>
                                </td>
                            </tr>

                            <?php


                          }



                    }
                      }
                         ?>

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Peserta -->



<?php include('footer.php'); ?>


<!--
SELECT juri_lomba.*, lomba_detail.* FROM juri_lomba
									LEFT JOIN lomba_detail ON juri_lomba.id_lomba = lomba_detail.id_lomba
                                    WHERE juri_lomba.id_lomba = 2 AND lomba_detail.id_lomba = 2
ORDER BY `juri_lomba`.`id_jurilomba` ASC -->
