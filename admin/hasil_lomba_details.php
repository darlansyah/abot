<?php 
include('header.php'); 

$id = $_GET['id']; // mengambil variable ID Lomba

// membuat query untuk menampilkan detail sesuai dengan ID Lomba
$query_lomba = mysqli_query($link, "select * from lomba where id_lomba = '$id'");
$data_lomba = mysqli_fetch_array($query_lomba);

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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fikri</td>   
                            <td>http ://link.com</td>
                            <td>00.00</td>
                        </tr>
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