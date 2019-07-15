<?php include('header.php'); ?>

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
                    <h3 class="section_title">KFI REG D.I.Yogyakarta</h3>
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
                                        <td>HTM </td>
                                        <td>Rp. 49.085</td>
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