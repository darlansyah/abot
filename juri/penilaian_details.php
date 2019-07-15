<?php include('header.php'); ?>

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
                        <td>warna warni indonesia</td>
                    </tr>
                    <tr>
                        <td>Jumlah Peserta </td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>Tanggal Mulai </td>
                        <td>23/05/2019</td>
                    </tr>
                    <tr>
                        <td>Tanggal Selesai </td>
                        <td>23/05/2019</td>
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
                        <tr>
                            <td>Fikri</td>   
                            <td>http ://link.com</td>
                            <td>00.00</td>
                            <td>
                                <div class="btn-group">
                                    <a href="nilai.php" class="btn btn-default btn-sm" alt="Edit" class="link-button">Beri Nilai</a>
                                </div>
                            </td>
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