<?php include('header.php');

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
								<li>Pengaturan</li>
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
						<h2 align="center" class="box-title">Lomba Saya</h2><br/>
						<div class="row courses_row">

							<!-- Course -->
							<?php
							$sql = "SELECT lomba_detail.*,lomba.* FROM lomba_detail
											LEFT JOIN lomba ON lomba_detail.id_lomba = lomba.id_lomba
											WHERE lomba_detail.id_peserta = $id_user";
							$query = mysqli_query($link, $sql);
							while($data = mysqli_fetch_array($query)){
							?>
							<div class="col-lg-4 course_col">
								<div class="course">
									<div class="course_image">
										<img src="admin/upload/<?= $data['foto'] ?>" alt="">
									</div>
									<div class="course_body">
										<h5 class="course_title"><?= $data['judul'] ?></h5>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<div class="course_price ml-auto"><a href="hasil.php?id_lomba=<?=$data['id_lomba'] ?>"> Hasil </a> 
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <?php } ?>



							<!-- Course -->



						</div>

						<!--slide-->
						<div class="row pagination_row">
							<div class="col">
								<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
									<ul class="pagination_list">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
									</ul>
									<div class="courses_show_container ml-auto clearfix">
										<div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>
										<div class="courses_show_content">
											<span>Show: </span>
											<select id="courses_show_select" class="courses_show_select">
												<option>06</option>
												<option>12</option>
												<option>24</option>
												<option>36</option>
											</select>
										</div>
									</div>
								</div>
							</div>
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
