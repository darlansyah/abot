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
			            <div class="col-md-12">
			                <!-- Horizontal Form -->
			                <div class="box box-info">
			                    <div class="box-header with-border">
			                        <h3 class="box-title">Lomba Saya</h3><br/>
			                        <section class="content container-fluid">

								        <div class="box">
								            <!-- /.box-header -->
								            <div class="box-body">
								                <table id="example" class="table table-bordered table-striped">
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
								                        <?php
								                        $sql = "SELECT lomba_detail.*,lomba.* FROM lomba_detail
                        												LEFT JOIN lomba ON lomba_detail.id_lomba = lomba.id_lomba
                        												WHERE lomba_detail.id_peserta = 13";
								                        $query = mysqli_query($link, $sql);
								                        while($data = mysqli_fetch_array($query)){
								                        ?>
								                        <tr>
								                            <td><?php echo $data['judul'];?></td>
								                            <td><?php echo $data['tgl_daftar'];?></td>
								                            <td><?php echo $data['tgl_mulai'];?></td>
								                            <td><?php echo $data['tgl_selesai'];?></td>
								                            <td>
								                                <div class="btn-group">
								                                    <a href="hasil.php?id_lomba=<?=$data['id_lom'] ?>" class="btn btn-default btn-sm" alt="Edit"><i class="fa fa-eye"></i></a>
								                                </div>
								                            </td>
								                        </tr>
								                        <?php } ?>
								                    </tbody>

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
					              <img class="profile-user-img img-responsive img-circle" src="images/am.jpg" alt="User profile picture">

					              <h3 class="profile-username text-center"><?php echo   $_SESSION['nama'] ?></h3>

					              <p class="text-muted text-center">Landscaper</p>
					         </div>
							<div class="sidebar_categories">
								<ul>
									<li><a href="profil.php">Profil</a></li>
									<li><a href="my_lomba.php">Lomba</a></li>
									<li><a href="pengaturan_profil.php">Pengaturan</a></li>
									<li><a href="logout.php">Lomba</a></li>
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
