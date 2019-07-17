<?php

include('header.php');

    $id = $_GET['id']; // mengambil variable ID Lomba
    // query menampilkan data peserta sesuai dengan ID lomba


    // membuat query untuk menampilkan detail sesuai dengan ID Lomba
    $query_peserta = mysqli_query($link, "SELECT users.nama as nama, lomba_detail.foto_bukti_pembayaran as gambar, lomba_detail.id_lombadetail, lomba_detail.id_lomba FROM users INNER JOIN lomba_detail ON users.id_user = lomba_detail.id_peserta WHERE users.id_user = $id");

    $data_peserta = mysqli_fetch_array($query_peserta);


 ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Verifikasi Pembayaran
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
                <table id="example1" class="table table-bordered table-striped">
                    <tr>
                        <td>Nama </td>
                        <td><?php echo $data_peserta['nama'];?></td>
                    </tr>

                    <tr>
                        <td>Foto </td>

                        <?php
                        if (empty($data_peserta['gambar'])) {
                          ?>
                          <td> Belum Ada Bukti Pembayaran </td>
                          <?php
                        }
                        else{
                          ?>
                          <td><img width="200" height="200" src="upload/<?= $data_peserta['gambar'] ?>"></td>
                          <?php
                        }

                         ?>

                    </tr>
                    </tr>
                </table>
                <div class="btn-group">
                  <?php
                  if (!empty($data_peserta['gambar'])) {
                    ?>
                    <a  class="btn btn-primary" href="verifikasi_bukti_pembayaran.php?id=<?= $data_peserta['id_lombadetail']?>&id_lomba=<?=$data_peserta['id_lomba'] ?>"> Setuju </a>
                    <?php
                  }
                     ?>
                </div>
              <a class="btn btn-primary" href="lomba_details.php?id=<?=$data_peserta['id_lomba']?>"> Kembali </a>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
   </div>

<?php include('footer.php'); ?>
