<?php include('header.php'); 

$id_lomba = $_GET['id'];
$query_lomba = mysqli_query($link, "select * from lomba where id_lomba = '$id_lomba'");
$data_lomba = mysqli_fetch_array($query_lomba);
?>

<!--home-->
<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li>Pembayaran</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div></br></br>

<!--pendaftaran-->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h1 class="section_title"><?php echo $data_lomba['judul'] ?></h1>
                    <div class="section_subtitle"><p>Terimakasih telah melakukan pendaftaran</p>
                        <p>silahkan melakukan pembayaran</p></div></br></br>
                    <section class="content container-fluid">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <tr>
                                        <td>Nama Rekening </td>
                                        <td>KFI JOGJA</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Rekening </td>
                                        <td>01 6655 32321</td>
                                    </tr>
                                    <tr>
                                        <td>Bank </td>
                                        <td>BNI</td>
                                    </tr>
                                    <tr>
                                        <td>Biaya Pendaftaran </td>
                                        <td>Rp. <?php echo $data_lomba['biaya_lomba'];?></td>
                                    </tr>            
                                </table></br>
                                <h3><p>Setelah Melakukan Pembayaran sesuai nominal pada HTM</p></h3>
                                <h3><p>Silahkan upload Bukti pembayaran</p></h3></br></br>
                                <form method="post" action="upload_pembayaran.php" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="foto">
                                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                    <!-- /.box-footer -->
                                </form>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="row about_row">



        </div>
    </div>
</div></br></br>

<?php include('footer.php'); ?>