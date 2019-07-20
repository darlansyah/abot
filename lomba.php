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
				<div class="col-lg-8">
					<div class="courses_search_container">
						<form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
							<input type="search" class="courses_search_input" placeholder="Search Lomba" required="required">
							<button action="submit" class="courses_search_button ml-auto">search now</button>
						</form>
					</div>
					<div class="courses_container">
						<div class="row courses_row">

							<?php
							$sql = "select * from lomba where status_lomba = 'Posting'";
							$query = mysqli_query($link, $sql);
							while($data = mysqli_fetch_array($query)){
							?>
							<!-- Course -->
							<div class="col-lg-4 course_col">
									<div class="course">
											<div class="course_image"><img src="admin/upload/<?php echo $data['foto'];?>" alt=""></div>
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
						<div class="sidebar_section">
							<div class="sidebar_section_title">Menu</div>
							<div class="sidebar_categories">
								<ul>
									<li><a href="hasil.php">Hasil</a></li>
									<li><a href="upload.php">Upload</a></li>
								</ul>
							</div>
						</div>

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Latest Courses</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/latest_1.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">How to Design a Logo a Beginners Course</a></div>
										<div class="latest_price">Free</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/latest_2.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">Photography for Beginners Masterclass</a></div>
										<div class="latest_price">$170</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="images/latest_3.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">The Secrets of Body Language</a></div>
										<div class="latest_price">$220</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Footer -->

<?php include('footer.php'); ?>
