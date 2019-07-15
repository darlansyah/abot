<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Juri
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
                <form action="juri_simpan.php" method="post">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id = $_GET['id_lomba'];
                            $sql = "select * from users where kategori = 'juri' order by id_user desc";
                            $query = mysqli_query($link, $sql);
                            while ($data = mysqli_fetch_array($query)) {
                                $id_juri = $data['id_user'];
                                $query_cek_juri = mysqli_query($link, "select * from juri_lomba where id_juri = '$id_juri' and id_lomba = '$id'");
                                $row = mysqli_num_rows($query_cek_juri);
                                
                                if($row > 0) {
                                    $check = 'checked="checked"';
                                } else {
                                    $check = '';
                                }
                                
                                
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="juri[]" value="<?php echo $data['id_user'];?>" <?php echo $check;?>></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['no_hp']; ?></td>
                                    <td>-</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <input type="hidden" name="id_lomba" value="<?php echo $id;?>">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            <!-- /.box-body -->
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>