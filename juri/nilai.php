<?php
include('header.php');
// include('koneksi.php');
$id = $_GET['id']; // id lombah
$id_peserta = $_GET['id_peserta']; // id peserta
$lomba_detail = "SELECT users.nama, lomba_detail.* FROM `lomba_detail` INNER JOIN users ON lomba_detail.id_peserta = users.id_user WHERE lomba_detail.id_lomba = $id AND lomba_detail.id_peserta = $id_peserta  ";
$query_lomba_detail = mysqli_query($link,$lomba_detail);
$data_lomba_detail = mysqli_fetch_array($query_lomba_detail);
// print_r($fetch_lomba_detail);
// die;

// var_dump($_GET);
// die;
//
//
//





?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Penilaian
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
     <section class="content container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Penilaian</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                        <div class="box-body">
                            <tr>
                            <div class="form-group">
                                <td>Nama :</td>
                                <td><?= $data_lomba_detail['nama'] ?></td>
                            </div>
                            </tr>
                            <tr>
                            <div class="form-group">
                                <td>Foto :</td>
                                <td>
                                    <img  width="500" src="../admin/upload/<?=  $data_lomba_detail['foto_lomba'] ?>" alt="gambar" >
                                    <p> </p>
                                    <p class="text-center">
                                      <a class="btn btn-primary" href="../admin/upload/<?=  $data_lomba_detail['foto_lomba'] ?>" > Lihat Foto </a>
                                    </p>
                                    </td>
                            </div>
                            </tr>

                            <tr>
                            <form action="nilai_lomba.php" method="post">
                              <input type="hidden" name="id_peserta" value="<?= $id_peserta ?>">
                              <input type="hidden" name="id_lomba" value="<?= $id ?>">


                                <div class="form-group">
                                    <td>Nilai</td>
                                    <input type="number" class="form-control"  placeholder="Nilai" name="nilai">
                                </div>

                                </tr>

                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            <!-- /.box-footer -->
                          </form>
                </div>
                <!-- /.box -->

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>
