<?php include('header.php'); ?>

<!--home-->
<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="lomba.php">Lomba</a></li>
								<li>Upload</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div></br></br>

<!--Upload Foto Lomba-->
<div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Warna Warni Indonesia</h2></br></br>
						<section class="content container-fluid">
						        <div class="box">
						            <!-- /.box-header -->
						            <div class="box-body">
						                <table id="example1" class="table table-bordered table-striped">
						                    <tr>
						                        <td>Nama Peserta</td>
						                        <td>Faiq</td>
						                    </tr>
						                    <tr>
						                        <td>Nomor Peserta</td>
						                        <td>85</td>
						                    </tr>
						                    <tr>
						                        <td>Status</td>
						                        <td>Lunas</td>
						                    </tr>            
						                </table></br>
						                <h3><p>Silahkan upload foto lomba anda</p></h3>
						                </br>
						                <form method="post" action="lomba_simpan.php">
					                        <div class="box-body">
					                            <div class="form-group">
					                                <input type="text" class="form-control" placeholder="Upload foto lomba" name="judul">

					                            </div>
					                        </div>
					                        <div class="box-footer">
					                            <button type="submit" class="btn btn-primary">Upload</button>
					                        </div>
					                        <!-- /.box-footer -->
					                    </form>
						            </div>
						            <!-- /.box-body -->
						        </div>
						    </section>
					</div>
				</div>
			</div>
			<div class="row about_row">
				
				

			</div>
		</div>
	</div></br></br>

<?php include('footer.php'); ?>