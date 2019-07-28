<?php include('header.php');

$id_user = $_SESSION['id_user'];

$query_lomba = "SELECT * FROM lomba_detail where id_peserta = $id_user ";

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
								<li>Lomba</li>
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
				<div class="col-lg-12">
					<div class="row">
			            <div class="col">
			                <div class="section_title_container text-center">
			                    <h2 class="section_title">KFI REG D.I.Yogyakarta</h2>
			                    <div class="section_subtitle"><p>silahkan pilih lomba yang tersedia</p></div>
			                </div>
			            </div>
			        </div>
					<div class="courses_container">
						<div class="row courses_row">

							<?php
							$sql = "select * from lomba where status_lomba = 'Posting'";
							$query = mysqli_query($link, $sql);
							while($data = mysqli_fetch_array($query)){
							?>
							<!-- Course -->
							<div class="col-lg-3 course_col">
									<div class="course">
											<div class="course_image"><img width="350" src="admin/upload/<?php echo $data['foto'];?>" alt=""></div>
											<div class="course_body">
													<h3 class="course_title"><a href="status_peserta.php?id=<?php echo $data['id_lomba'];?>"><?php echo $data['judul'];?></a></h3>
											</div>
											<div class="course_footer">
													<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">

														<?php
														if($fetch_lomba['id_peserta'] && $fetch_lomba['foto_bukti_pembayaran'] && ($data['id_lomba'] == $fetch_lomba['id_lomba'])){
															?>
															<div class="course_price ml-auto">Upload </div>
															<?php
														}
														else {
														?>

														<div class="course_info">
														<i class="fa fa-dollar" aria-hidden="true"></i>
														<span>Biaya Pendaftaran  :</span>
														</div>
																			<div class="course_price ml-auto">Rp. <?php echo $data['biaya_lomba'];?></div>
														<?php
														}
														 ?>


													</div>
											</div>
									</div>
							</div>
							<?php } ?>
				        </div>

						<!--slide-->
						<div class="row pagination_row">
							<div class="col">
								<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
									<ul class="pagination_list">
										<li><a href="#">1</a></li>
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
				
			</div>
		</div>
	</div>



	<!-- Footer -->

<?php include('footer.php'); ?>
