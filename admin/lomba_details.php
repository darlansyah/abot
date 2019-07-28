<?php

include('header.php');
// include('koneksi.php');
$id = $_GET['id']; // mengambil variable ID Lomba

// membuat query untuk menampilkan detail sesuai dengan ID Lomba
$query_lomba = mysqli_query($link, "select * from lomba where id_lomba = '$id'");
$data_lomba = mysqli_fetch_array($query_lomba);
// var_dump($data_lomba);
// die;

// query menampilkan data juri sesuai dengan ID Lomba
$query_juri = mysqli_query($link, "select * from juri_lomba a left join users b on a.id_juri=b.id_user where id_lomba = '$id'");

// query menampilkan data peserta sesuai dengan ID lomba
$query_peserta = mysqli_query($link, "select * from lomba_detail a "
        . "left join users b on a.id_peserta=b.id_user "
        . "left join status_lomba c on c.id_status=a.id_status "
        . "where id_lomba = '$id'") or die(mysqli_error($link));

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
                <table id="example1" class="table table-bordered table-striped">
                    <tr>
                        <td width="200">Judul </td>
                        <td><?php echo $data_lomba['judul'];?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Daftar </td>
                        <td><?php echo $data_lomba['tgl_daftar'];?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Mulai </td>
                        <td><?php echo $data_lomba['tgl_mulai'];?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Selesai </td>
                        <td><?php echo $data_lomba['tgl_selesai'];?></td>
                    </tr>
                    <tr>
                        <td>Biaya Pendaftaran</td>
                        <td>Rp. <?php echo $data_lomba['biaya_lomba'];?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><?php echo $data_lomba['status_lomba'];?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi </td>
                        <td><?php echo $data_lomba['deskripsi'];?></td>
                    </tr>
                     <tr>
                        <td>Foto </td>
                        <td><img src="upload/<?php echo $data_lomba['foto'];?>" width="700"></td>
                    </tr>


                </table>
            </div>
            <!-- /.box-body -->
        </div>

    </section>
    <!-- /.content -->

<!-- Detail Juri -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Juri
        </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><a href="juri_tambah.php?id_lomba=<?php echo $id;?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah / Edit Juri</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($data_juri = mysqli_fetch_array($query_juri)) { ?>
                        <tr>
                            <td><?php echo $data_juri['nama'];?></td>
                            <td><?php echo $data_juri['email'];?></td>
                            <td><?php echo $data_juri['no_hp'];?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="juri_hapus.php?id_juri=<?php echo $data_juri['id_jurilomba'];?>&id_lomba=<?php echo $id;?>" class="btn btn-default btn-sm" alt="Delete" onclick="return confirm('Apakah Anda yakin?');"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- /.content -->

<!-- Peserta -->
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
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Nilai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($data_peserta = mysqli_fetch_array($query_peserta)){?>
                        <tr>
                            <td><?php echo $data_peserta['nama'];?></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $data_peserta['nama_status'];?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="verif_pembayaran.php?id=<?php echo $data_peserta['id_user'];?>&id_lomba=<?=$data_lomba['id_lomba'] ?>" class="btn btn-default btn-sm" alt="Edit"><i class="fa fa-check"></i></a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>
