<?php include('header.php'); ?>

<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Detail Lomba</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>

<!-- Course -->

<div class="course">
    <div class="container">
        <div class="row">

            <!-- Course -->
            <div class="col-lg-8">
                <?php
                $id = $_GET['id'];
                $sql = "select * from lomba where id_lomba = '$id'";
                $query = mysqli_query($link, $sql);
                $data = mysqli_fetch_array($query);
                ?>
                <div class="course_container">
                    <div class="course_title"><?php echo $data['judul']; ?></div>
                    <div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                    </div>

                    <!-- Course Image -->
                    <div class="course_image"><img src="admin/upload/<?php echo $data['foto']; ?>" alt=""></div>

                    <!-- Course Tabs -->
                    <div class="course_tabs_container">
                        <div class="tabs d-flex flex-row align-items-center justify-content-start">
                            <div class="tab active"><?php echo $data['deskripsi']; ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">

                    <!-- Feature -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Pendaftaran</div>
                        <div class="sidebar_feature">
                            <div class="course_price">Rp. <?php echo $data['biaya_lomba']; ?></div>

                            <!-- Features -->
                            <div class="feature_list">

                                <!-- Feature -->
                                <div class="feature d-flex flex-row align-items-center justify-content-start">
                                    <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Tanggal Pendaftaran:</span></div>
                                    <div class="feature_text ml-auto"><?php echo $data['tgl_daftar']; ?></div>
                                </div>
                                <!-- Feature -->
                                <div class="feature d-flex flex-row align-items-center justify-content-start">
                                    <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Tanggal Mulai:</span></div>
                                    <div class="feature_text ml-auto"><?php echo $data['tgl_mulai']; ?></div>
                                </div>

                                <!-- Feature -->
                                <div class="feature d-flex flex-row align-items-center justify-content-start">
                                    <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Tanggal Selesai:</span></div>
                                    <div class="feature_text ml-auto"><?php echo $data['tgl_selesai']; ?></div>
                                </div>
                                <form method="post" action="upload_pembayaran.php" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="foto">
                                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Upload Foto Karya</button>
                                    </div>
                                    <!-- /.box-footer -->
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>