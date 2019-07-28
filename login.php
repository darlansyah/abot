<?php include('header.php'); ?>

<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li>Login</li>
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
                        <h2><?php echo $_GET['pesan'];?></h2>
                        <?php }?>
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Login</h3>
                            </div><br/>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form action="login_cek.php" method="post" >
                                <div class="box-body">
                                    <div class="form-group">                            
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required="harus diisi">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required="harus diisi">
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div><br>
                        <i>*Belum terdaftar sebagai member? klik </i> <a href="daftar.php">Daftar</a>

                    </section>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- Footer -->

<?php include('footer.php'); ?>