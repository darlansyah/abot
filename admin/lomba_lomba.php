<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Lomba
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><a href="lomba_tambah.php" class="btn btn-success"><i class="fa fa-plus"></i> Add Lomba</a></h3> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Jumlah Peserta</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>HTM</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       <!-- <?php
                        $sql = "select * from lomba order by id_lomba desc";
                        $query = mysqli_query($link, $sql);
                        while($data = mysqli_fetch_array($query)){
                        ?> -->
                        <tr>
                            <td><?php echo $data['judul'];?></td>
                            <td><?php echo $data['jml_peserta'];?></td>
                            <td><?php echo $data['tanggal_mulai'];?></td>
                            <td><?php echo $data['tanggal_peserta'];?></td>
                            <td><?php echo $data['htm'];?></td>
                            <td>-</td>
                            <td>
                                <div class="btn-group">
                                    <a href="user_delete.php?id=<?php echo $data['id_user'];?>" class="btn btn-default btn-sm" alt="Delete" onclick="return confirm('Apakah Anda yakin?');"><i class="fa fa-trash-o"></i></a>
                                    <a href="user_edit.php?id=<?php echo $data['id_user'];?>" class="btn btn-default btn-sm" alt="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="lomba_detail.php?id=<?php echo $data['id_lomba'];?>" class="btn btn-default btn-sm" alt="Edit"><i class="fa fa-edit"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
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