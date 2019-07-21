<?php include('header.php') ?>

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

					              <h3 class="profile-username text-center">A.M Ibrahim</h3>
					             
					              <p class="text-muted text-center">Landscaper</p>
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
						<div class="content-wrapper">
						    <!-- Content Header (Page header) -->
						    <section class="content-header">
						        <h1>
						            Data Lomba
						        </h1>
						        <ol class="breadcrumb">
						            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
						            <li class="active">Here</li>
						        </ol>
						    </section>

						    <!-- Main content -->
						    <section class="content container-fluid">

						        <div class="box">
						            <div class="box-header">
						                <h3 class="box-title"><a href="lomba_tambah.php" class="btn btn-success"><i class="fa fa-plus"></i> Add Lomba</a></h3> 
						            </div>
						            <!-- /.box-header -->
						            <div class="box-body">
						                <table id="example1" class="table table-bordered table-striped">
						                    <thead>
						                        <tr>
						                            <th>Judul</th>
						                            <th>Tanggal Daftar</th>
						                            <th>Tanggal Mulai</th>
						                            <th>Tanggal Selesai</th>
						                            <th>Aksi</th>
						                        </tr>
						                    </thead>
						                    <tbody>
						                        <tr>
						                            <td>Lomba fotografi pantai siung</td>
						                            <td>23-07-2019</td>
						                            <td>23-07-2019</td>
						                            <td>23-07-2019</td>
						                            <td>
						                                <div class="btn-group">
						                                    <a href="hasil.php" class="btn btn-default btn-sm" alt="Edit"><i class="fa fa-eye"></i></a>
						                                </div>
						                            </td>
						                        </tr>
						                    </tbody>
						                    
						                </table>
						            </div>
						            <!-- /.box-body -->
						        </div>

						    </section>
						    <!-- /.content -->
						</div>
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
<?php include('footer.php') ?>