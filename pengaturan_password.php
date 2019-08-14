<?php
include('header.php');

if (empty($_SESSION['id_user'])) {
	header('location:index.php');
}

$id_user = $_SESSION['id_user'];


$query_lomba = "SELECT * FROM users where id_user = $id_user " ;

$data = mysqli_query($link,$query_lomba);

$user = mysqli_fetch_array($data);

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
                    <form action="update_password.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?=$id_user ?>">
						<div class="box-body">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="password baru" name="password" required="harus diisi">
							</div>
                        </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
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
						<div class="sidebar_section" >
							<div align="center" class="box-body box-profile">
					            <img class="profile-user-img img-responsive img-circle" src="admin/upload/<?php echo $user['foto_profil'];?>" width="50%" alt=""><br/><br/>
					            <h3 class="profile-username text-center"><?= $user['nama'] ?></h3>
					            <p class="text-muted text-center"><?= $user['tanggal_lahir'] ?></p>
					        </div>
							<div class="sidebar_categories">
								<ul>
									<li><a href="profil.php">Profil</a></li>
									<li><a href="my_lomba.php">Lomba</a></li>
									<li><a href="pengaturan_profil.php">Pengaturan</a></li>
									<li><a href="pengaturan_password.php">Ubah Password</a></li>
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
