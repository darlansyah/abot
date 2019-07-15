<?php include('header.php'); ?>

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
                    <form method="post" action="lomba_simpan.php">
                        <div class="box-body">
                            <tr>
                            <div class="form-group">
                                <td>Nama :</td>
                                <td>Fikri</td>
                            </div>
                            </tr>
                            <tr>
                            <div class="form-group">
                                <td>Foto :</td>
                                <td>image</td>
                            </div>
                            </tr>
                            <tr>
                            <div class="form-group">
                                <td>Nilai</td>
                                <input type="text" class="form-control"  placeholder="Nilai" name="nilai">
                            </div>
                            </tr>
                             <tr>
                            <div class="form-group">
                                <td>Penjelasan</td>
                                <input type="text" class="form-control"  placeholder="Deskripsi" name="desc">
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