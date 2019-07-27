<?php include('header.php');
$id = $_GET['id'];
$sql = "select * from lomba where id_lomba = '$id'";
$query = mysqli_query($link, $sql);
$data = mysqli_fetch_array($query);

$draft = $posting = '';

if($data['status_lomba'] == 'draft') {
    $draft = 'checked="checked"';
}

if($data['status_lomba'] == 'posting') {
    $posting = 'checked="checked"';
}
?>
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Lomba
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Lomba</a></li>
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
                    <form method="post" action="lomba_update.php" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group col-md-10">
                                <label>Judul</label>
                                <input type="text" class="form-control" placeholder="Judul Lomba" name="judul" value="<?php echo $data['judul'];?>">

                            </div>
                            <div class="form-group col-md-4">
                                <label>Tanggal Daftar</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="tanggal_daftar" value="<?php echo date("d-m-Y", strtotime($data['tanggal_daftar']));?>">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Tanggal Mulai</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="tanggal_mulai" value="<?php echo date("d-m-Y", strtotime($data['tanggal_mulai']));?>">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Tanggal Selesai</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="tanggal_selesai" value="<?php echo date("d-m-Y", strtotime($data['tanggal_selesai']));?>">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Biaya Daftar</label>
                                <input type="text" class="form-control" placeholder="biaya daftar" name="biaya_daftar" value="<?php echo $data['biaya_daftar'];?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Foto</label>
                                <input type="file" name="foto">
                            </div>
                            <div class="form-group col-md-4">
                                <label>
                                    <input type="radio" name="status_lomba" class="minimal" value="draft" <?php echo $draft;?>> draft
                                </label>
                                <label>
                                    <input type="radio" name="status_lomba" class="minimal" value="Posting" <?php echo $draft;?>> Posting
                                </label>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Deskripsi</label>
                                <textarea class="textarea" name="deskripsi" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" value="<?php echo $data['judul'];?>">
                                              
                                </textarea>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
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