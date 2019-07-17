<?php
// session_start();
//   if(empty($_SESSION['id_user'])){
// 		echo "kosong";
// 	}
// 	else {
// 		echo "ada";
// 	}
// die;


include('header.php'); ?>

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

			<!--Sidebar -->

				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="box-body box-profile">
					              <img class="profile-user-img img-responsive img-circle" src="images/am.jpg" alt="User profile picture">

					              <h3 class="profile-username text-center">AM Ibrahim</h3>

					              <p class="text-muted text-center">Landscaper</p>
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

						<!-- Latest Course -->

						<!-- Gallery -->

					</div>
				</div>
			</div>
		</div>
	</div>

<?php include('footer.php'); ?>
