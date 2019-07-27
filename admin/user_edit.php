<?php include('header.php');
$id = $_GET['id'];
$sql = "select * from users where id_user = '$id'";
$query = mysqli_query($link, $sql);
$data = mysqli_fetch_array($query);

$cek_admin = $cek_juri = '';

if($data['kategori'] == 'admin') {
    $cek_admin = 'checked="checked"';
}

if($data['kategori'] == 'juri') {
    $cek_juri = 'checked="checked"';
}
?>
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Users
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
            <li class="active">Tambah</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Horizontal Form</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" action="user_update.php">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $data['nama'];?>">

                            </div>
                            <div class="form-group">
                                <label>Email</label>                              
                                <input type="email" class="form-control"  placeholder="Email" name="email" value="<?php echo $data['email'];?>">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="tanggal_lahir" value="<?php echo date("d-m-Y", strtotime($data['tanggal_lahir']));?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control"  placeholder="Alamat" name="alamat" value="<?php echo $data['alamat'];?>">
                            </div>
                            <div class="form-group">
                                <label>Handphone</label>
                                <input type="text" class="form-control"  placeholder="Handphone" name="handphone" value="<?php echo $data['no_hp'];?>">
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="kategori" class="minimal" value="admin" <?php echo $cek_admin;?>> Admin
                                </label>
                                <label>
                                    <input type="radio" name="kategori" class="minimal" value="juri" <?php echo $cek_juri;?>> Juri
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" placeholder="Password" name="password">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
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