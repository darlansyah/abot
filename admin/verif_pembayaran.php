<?php 

include('header.php'); 

    $id = $_GET['id']; // mengambil variable ID Lomba
    // query menampilkan data peserta sesuai dengan ID lomba
   $id = $_GET['id']; // mengambil variable ID Lomba

    // membuat query untuk menampilkan detail sesuai dengan ID Lomba
    $query_peserta = mysqli_query($link, "select * from users where id_user = '$id'");
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
                        <td>Image</td>
                    </tr>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary">Setujui</button>
                <button type="reset" class="btn btn-primary">Batal</button>	
            </div>
            <!-- /.box-body -->
        </div>
    </section>
   </div>

<?php include('footer.php'); ?>