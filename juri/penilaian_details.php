<?php
include('header.php');
 //include('koneksi.php');

$id = $_GET['id']; // mengambil variable ID Lomba
$id_juri = 2; // asumsi

// membuat query untuk menampilkan detail sesuai dengan ID Lomba
$query_lomba = mysqli_query($link, "select * from lomba where id_lomba = '$id'");
$data_lomba = mysqli_fetch_array($query_lomba);

//$lomba_detail = "SELECT users.nama, lomba_detail.* FROM `lomba_detail` INNER JOIN users ON lomba_detail.id_peserta = users.id_user WHERE lomba_detail.id_lomba = $id";
// $lomba_detail = "SELECT juri_lomba.nilai, lomba_detail.*,users.* FROM juri_lomba INNER JOIN lomba_detail ON juri_lomba.id_lomba = lomba_detail.id_lomba
// 														INNER JOIN users ON users.id_user = lomba_detail.id_peserta
// WHERE lomba_detail.id_lomba = 2 AND juri_lomba.id_juri = $id";


// lomba dettail 01
$lomba_detail = "SELECT tb_nilai.*, lomba_detail.*, users.nama FROM lomba_detail
                            INNER JOIN tb_nilai ON lomba_detail.id_lombadetail = tb_nilai.id_lombadetail_nilai
														INNER JOIN users ON lomba_detail.id_peserta = users.id_user
                            WHERE lomba_detail.id_lomba = $id";

$query_lomba_detail = mysqli_query($link,$lomba_detail);

// var_dump($query_lomba_detail);
//
// echo "<br/>";
// lomba dettail 02
$lomba_detail2 = "SELECT users.nama, lomba_detail.* FROM `lomba_detail`
                  INNER JOIN users ON lomba_detail.id_peserta = users.id_user
                  WHERE lomba_detail.id_lomba = $id";

$query_lomba_detail2 = mysqli_query($link,$lomba_detail2);

// var_dump($query_lomba_detail2);



//
// var_dump($query_lomba_detail);
// die;

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
                          while ($data_lomba_detail2 = mysqli_fetch_array($query_lomba_detail2)) {
                        if (!empty($data_lomba_detail['foto_lomba']) && !empty($data_lomba_detail2['foto_lomba']) ) {
                          if( ($data_lomba_detail['id_lombadetail_nilai']) == ($data_lomba_detail2['id_lombadetail']) ){
                            ?>
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
                          else {
                            ?>
                            <tr>
                                <td><?= $data_lomba_detail2['nama'] ?></td>
                                <td><img width="80" height="80"src="../admin/upload/<?php echo $data_lomba_detail2['foto_lomba']; ?>" alt=""></td>
                              <td>kosong</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="nilai.php?id=<?= $id ?>&id_peserta=<?=$data_lomba_detail2['id_peserta'] ?> " class="btn btn-default btn-sm"  class="link-button">Beri Nilai</a>
                                    </div>
                                </td>

                            </tr>
                        <?php
                        }
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
