<?php
include('header.php');
// include('koneksi.php');
$id = $_GET['id']; // id lombah
$id_peserta = $_GET['id_peserta']; // id peserta

$id_jurilomba =  id_jurilomba($id,$id_juri);

 $lomba_detail = "SELECT tb_nilai.*, lomba_detail.*, users.nama FROM lomba_detail
                 LEFT JOIN tb_nilai ON lomba_detail.id_lombadetail = tb_nilai.id_lombadetail_nilai AND tb_nilai.id_jurilomba = $id_jurilomba
                 INNER JOIN users ON lomba_detail.id_peserta = users.id_user
                 WHERE lomba_detail.id_lomba = $id AND lomba_detail.id_peserta = $id_peserta";

$query_lomba_detail = mysqli_query($link,$lomba_detail);
$data_lomba_detail = mysqli_fetch_array($query_lomba_detail);

if(empty($data_lomba_detail['id_nilai'])){
  $aksi = "simpan";
  $nilai = 0;
}
else{
  $aksi = "update";
  $nilai = $data_lomba_detail['nilai'];
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Input Nilai
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
                                <td>Foto :</td></br>
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
                              <input type="hidden" name="aksi" value="<?= $aksi ?>">
                              <input type="hidden" name="id_peserta" value="<?= $id_peserta ?>">
                              <input type="hidden" name="id_lomba" value="<?= $id ?>">


                                <div class="form-group">
                                    <td>Nilai</td>
                                    <input type="number" class="form-control"  placeholder="Nilai" name="nilai" value="<?= $nilai ?>">
                                </div>

                                </tr>

                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary"><?= $aksi?></button>
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
