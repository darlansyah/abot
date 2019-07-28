<?php include('header.php'); ?>

<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>

<!-- Courses -->

<div class="courses">
    <div class="container">
        <div class="row">

            <!-- Courses Main Content -->
            <div class="col-lg-6">
                <div class="courses_container">
                    <section class="content container-fluid">
                        <?php if(isset($_GET['pesan'])) { ?>
                        <h1><?php echo $_GET['pesan'];?></h1>
                        <?php }?>
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h2 class="box-title">Register Member</h2>
                            </div><br/>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form action="daftar_simpan.php" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <!-- <label>Nama</label> -->
                                        <input type="text" class="form-control" placeholder="Nama" name="nama" required="harus diisi">

                                    </div>
                                    <div class="form-group">
                                        <!-- <label>Email</label> -->                              
                                        <input type="email" class="form-control"  placeholder="Email" name="email" >
                                    </div>
                                    <div class="form-group">
                                        <!-- <label>Tanggal Lahir</label> -->
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Tanggal Lahir &nbsp; | &nbsp; contoh : 04-04-2000"data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="tanggal_lahir">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label>Alamat</label> -->
                                        <input type="text" class="form-control" class="fa fa-eye"  placeholder="Alamat" name="alamat">
                                    </div>
                                    <div class="form-group">
                                        <!-- <label>Handphone</label> -->
                                        <input type="text" class="form-control"  placeholder="Handphone" name="handphone">
                                    </div>
                                    <div class="form-group">
                                        <!-- <label>Photo Profil</label> -->
                                        <input type="file" class="form-control" placeholder="photo profil" name="foto">
                                    </div>
                                    <div class="form-group">
                                        <!-- <label>Password</label> -->
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>

                    </section>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- Footer -->

<?php include('footer.php'); ?>