<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Lomba
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
            <li class="active">Tambah</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" action="lomba_simpan.php" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group col-md-10">
                                <label>Judul</label>
                                <input type="text" class="form-control" placeholder="Judul Lomba" name="judul">

                            </div>
                            <div class="form-group col-md-4">
                                <label>Tanggal Daftar</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="tgl_daftar" name="tanggal_daftar">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Tanggal Mulai</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="tgl_mulai" name="tanggal_mulai">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Tanggal Selesai</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="tgl_selesai" name="tanggal_selesai">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Biaya Daftar</label>
                                <input type="text" class="form-control"  placeholder="Harga Tiket Masuk" name="biaya_daftar">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Foto</label>
                                <input type="file" name="foto">
                            </div>
                            <div class="form-group col-md-4">
                                <label>
                                    <input type="radio" name="status" class="minimal" value="Draft"> Draft
                                </label>
                                <label>
                                    <input type="radio" name="status" class="minimal" value="Posting"> Posting
                                </label>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Deskripsi</label>
                                <textarea class="textarea" name="deskripsi" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                              
                                </textarea>
                            </div>
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