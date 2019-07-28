<?php
include('header.php');
if (empty($_SESSION['id_user'])) {
	$id_user = 0;
}
else{
		$id_user = $_SESSION['id_user'];
}


$id_user = $_SESSION['id_user'];

$query_lomba = "SELECT * FROM users where id_user = $id_user " ;

$data_lomba = mysqli_query($link,$query_lomba);

$fetch_lomba = mysqli_fetch_array($data_lomba);
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
			            <div class="col-md-12">
			                <!-- Horizontal Form -->
			                <div class="box box-info">
			                    <div class="box-header with-border">
			                        <h3 class="box-title"><?php echo   $_SESSION['nama'] ?></h3><br/>
										<section class="content container-fluid">

										        <div class="box">
										            <!-- /.box-header -->
										            <div class="box-body">
										                <table id="example1" class="table table-bordered table-striped">
										                    <tr>
										                        <td width="200">Nama </td>
										                        <td><?= $fetch_lomba['nama']?></td>
										                    </tr>
										                    <tr>
										                        <td>Email </td>
										                        <td></td>
										                    </tr>
										                    <tr>
										                        <td>Tanggal Lahir</td>
										                        <td></td>
										                    </tr>
										                    <tr>
										                        <td>Alamat</td>
										                        <td></td>
										                    </tr>
										                    <tr>
										                        <td>No Hp</td>
										                        <td></td>
										                    </tr>
										                     <tr>
										                        <td>Foto </td>
										                        <td><img src="../upload/<?php echo $data_lomba['foto_profil'];?>" width="700"></td>
										                    </tr>


										                </table>
										            </div>
										            <!-- /.box-body -->
										        </div>

										</section>
			                    </div>
			                    <!-- /.box-header -->
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
					              <img class="profile-user-img img-responsive img-circle" src="../upload/<?php echo $data_lomba['foto_profil'];?>" width="700" alt="">

					              <h3 class="profile-username text-center"><?php echo   $_SESSION['nama'] ?></h3>

					              <p class="text-muted text-center">Landscaper</p>
					         </div>
							<div class="sidebar_categories">
								<ul>
									<li><a href="profil.php">Profil</a></li>
									<li><a href="Profil_lomba.php">Lomba</a></li>
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
