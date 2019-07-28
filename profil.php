<?php
include('header.php');

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
								<li>Profil</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--PP-->

<!--Sidebar -->

				<div class="col-lg-3">
					<div class="sidebar">

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="box-body box-profile">

					             <img class="profile-user-img img-responsive img-circle" src="images/am.jpg" alt="User profile picture"></br>

					              <h3 class="profile-username text-center"><?= $fetch_lomba['nama'] ?></h3>

					              <p class="text-muted text-center"><?= $fetch_lomba['kategori'] ?></p>
					         </div>
							<div class="sidebar_categories">
								<ul>
									<li><a href="profil.php">Profil</a></li>
									<li><a href="profil_lomba.php">Lomba</a></li>
									<li><a href="pengaturan_profil.php">Pengaturan</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</div>
						</div>

						<!-- Latest Course -->


						<!-- Gallery -->

					</div>
				</div>
			</div>

<!--profil-->
	<div class="courses">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="courses_container">
						<div class="row courses_row">

						</div>
					</div>
				</div>


		</div>
	</div>

<?php include('footer.php'); ?>
