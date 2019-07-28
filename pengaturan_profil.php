<?php
include('header.php');
if (empty($_SESSION['id_user'])) {
	$id_user = 0;
}
else{
		$id_user = $_SESSION['id_user'];
}
?>

	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="profile.php">Profil</a></li>
								<li>Lomba Saya</li>
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
				<div class="col-lg-8">
					<div class="courses_container">
						<div class="row courses_row">
							<section class="content container-fluid">
        <div class="row">
            <div class="col-md-9">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h2 class="box-title">Pengaturan</h2><br/><br/>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="profil_update.php" method="post" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control"  placeholder="Alamat" name="alamat">
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
	            </div>
	        </div>
	    </section>
						</div>
					</div>
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="box-body box-profile">
					              <img class="profile-user-img img-responsive img-circle" src="images/am.jpg" alt="User profile picture">

					              <h3 class="profile-username text-center"><?php echo   $_SESSION['nama'] ?></h3>
					         </div>
							<div class="sidebar_categories">
								<ul>
									<li><a href="profil.php">Profil</a></li>
									<li><a href="my_lomba.php">Lomba</a></li>
									<li><a href="pengaturan_profil.php">Pengaturan</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Footer -->

<?php include('footer.php'); ?>
