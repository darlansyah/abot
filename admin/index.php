<?php
include('header.php');

// include('koneksi.php');

$user = "SELECT COUNT(kategori) as 'jumlah' FROM `users`
                WHERE kategori = 'peserta'";
$query_user = mysqli_query($link,$user);
$jumlah_user = mysqli_fetch_assoc($query_user);

$juri = "SELECT COUNT(kategori) as 'jumlah' FROM `users`
                WHERE kategori = 'juri'";
$query_juri = mysqli_query($link,$juri);
$jumlah_juri = mysqli_fetch_assoc($query_juri);

$lomba = "SELECT COUNT(id_lomba) as 'jumlah' FROM `lomba`";
$query_lomba = mysqli_query($link,$lomba);
$jumlah_lomba = mysqli_fetch_assoc($query_lomba);

$user_d = "SELECT * FROM `users`
          WHERE kategori = 'peserta'
          ORDER BY `users`.`id_user`  DESC
          LIMIT 5";
$query_user_d = mysqli_query($link,$user_d);

$juri_d = "SELECT * FROM `users`
          WHERE kategori = 'juri'
          ORDER BY `users`.`id_user`  DESC
          LIMIT 5";
$query_juri_d = mysqli_query($link,$juri_d);

$lomba_d = "SELECT * FROM `lomba`
            ORDER BY `id_lomba`  DESC
            LIMIT 5";
$query_lomba_d = mysqli_query($link,$lomba_d);

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col">
                <div align="text-center" class="section_title_container text-center">
                    <h2 class="section_title"><p><b>Komunitas Fotografi Indonesia</b></p>
                                              <p><b>REG D.I.Yogyakarta</b></p></h2>
                </div>
            </div>
        </div><br/><br/><br/><br/>

        <div class="row">
        <a href="user.php">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i><?= $jumlah_user['jumlah'] ?></i></span>
            <div class="info-box-content">
              <h2 style="text-align: center;">MEMBER</h2>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </a>
        <!-- /.col -->
        <a href="user.php">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i><?= $jumlah_juri['jumlah'] ?></i></span>

            <div class="info-box-content">
              <h2 style="text-align: center;">JURI</h2>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </a>
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <a href="lomba.php">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i><?= $jumlah_lomba['jumlah'] ?></i></span>

            <div class="info-box-content">
              <h2 style="text-align: center;">LOMBA</h2>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </a>
      </div>
      <!-- /.row -->

           </br></br>


        <!-- Tabel -->
        <div class="row">
          <div class="col-md-4">
            <div class="box">
            <div class="box-header">
              <h3 style="padding:5px;" class="bg-aqua"><b>5 Member Terakhir</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                  <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>

                </tr>
                <?php
                $user_no = 1;
                while ($data_user =  mysqli_fetch_assoc($query_user_d)) {
                  ?>
                  <tr>
                    <td><?= $user_no++ ?></td>
                    <td><?= $data_user['nama'] ?></td>
                    <td><?= $data_user['email'] ?></td>
                  </tr>
                  <?php
                }
                 ?>


              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <div class="col-md-4">

            <div class="box">
            <div class="box-header">
              <h3 style="padding:5px;" class="bg-red"><b>5 Juri Terakhir</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>

                </tr>
                <?php
                $juri_no = 1;

                while ($data_juri =  mysqli_fetch_assoc($query_juri_d)) {
                  ?>
                  <tr>
                    <td><?=$juri_no++ ?></td>
                    <td> <?=$data_juri['nama'] ?> </td>
                    <td><?=$data_juri['email'] ?> </td>
                  </tr>
                  <?php
                }
                 ?>


              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <div class="col-md-4">

            <div class="box">
            <div class="box-header">
              <h3 style="padding:5px;" class="bg-green"><b>5 Lomba Terakhir</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th>No</th>
                  <th>Lomba</th>
                  <th>Tgl_Selesai</th>
                </tr>
                <?php
                $lomba_no = 1;
                while ($data_lomba = mysqli_fetch_assoc($query_lomba_d)) {
                 ?>
                <tr>
                  <td><?= $lomba_no++?></td>
                  <td><?= $data_lomba['judul'] ?></td>
                  <td><?= $data_lomba['tgl_selesai'] ?> </td>
              </tr>
              <?php
              }
               ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>
