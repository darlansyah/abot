<?php include('header.php');
$id = $_GET['id'];
$sql = "select * from lomba where id_lomba = '$id'";
$query = mysqli_query($link, $sql);
$data = mysqli_fetch_array($query);

$draft = $posting = '';

if($data['status_lomba'] == 'Draft') {
    $draft = 'checked="checked"';
}

if($data['status_lomba'] == 'Posting') {
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
            <li class="active">Update Lomba</li>
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
                      <input type="hidden" name="id" value="<?= $data['id_lomba'] ?>">
                      <input type="hidden" name="foto_lama" value="<?= $data['foto'] ?>">
                        <div class="box-body">
                          <div align="center"  class="form-group col-md-12">

                              <img width="100%"  src="upload/<?= $data['foto'] ?>" alt="foto"> <br/> <br/>

                          </div>

                            <div class="form-group col-md-12">
                                <label>Judul</label>
                                <input type="text" class="form-control" placeholder="Judul Lomba" name="judul" value="<?php echo $data['judul'];?>">

                            </div>
                            <div class="form-group col-md-4">
                                <label>Tanggal Daftar</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="tgl_daftar" name="tanggal_daftar" value="<?php echo date('Y-m-d', strtotime($data['tgl_daftar']));?>">
                                </div>
                            </div>
                           <div class="form-group col-md-4">
                                <label>Tanggal Mulai</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="tgl_mulai" name="tanggal_mulai" value="<?php echo date('Y-m-d', strtotime($data['tgl_mulai']));?>">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Tanggal Selesai</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="tgl_selesai" name="tanggal_selesai" value="<?php echo date('Y-m-d', strtotime($data['tgl_selesai']));?>">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Biaya Daftar</label>
                                <input type="text" class="form-control" placeholder="biaya daftar" name="biaya_daftar" value="<?php echo $data['biaya_lomba'];?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Foto</label>
                                  <input  type="file" name="foto">
                            </div>
                            <div class="form-group col-md-4">
                                <label> Status </label> <br/>
                                    <input type="radio" name="status_lomba" class="minimal" value="Draft" <?php echo $draft;?>> draft
                                    <input type="radio" name="status_lomba" class="minimal" value="Posting" <?php echo $posting;?>> Posting

                            </div>
                            <div class="form-group col-md-12">
                                <label>Deskripsi</label>
                                <textarea class="textarea" name="deskripsi" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" >
                                  <?php echo $data['deskripsi'];?>
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
