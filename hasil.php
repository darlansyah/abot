<?php
include("header.php");
// include('admin/koneksi.php');
$id_lomba = $_GET['id_lomba'];



$str_data = "SELECT users.*, lomba_detail.*,tb_nilai.*, AVG(tb_nilai.nilai) AS 'rata-rata' FROM users
			LEFT JOIN lomba_detail ON users.id_user = lomba_detail.id_peserta
			LEFT JOIN tb_nilai ON lomba_detail.id_lombadetail = tb_nilai.id_lombadetail_nilai
            WHERE users.kategori = 'peserta' AND lomba_detail.id_lomba = $id_lomba
            GROUP BY tb_nilai.id_lombadetail_nilai
            ORDER BY AVG(tb_nilai.nilai) DESC";
// echo $str_data;

$query = mysqli_query($link,$str_data);

$str_lomba = "SELECT judul FROM lomba WHERE id_lomba = $id_lomba";
$query_lomba = mysqli_query($link,$str_lomba);
$judul = mysqli_fetch_assoc($query_lomba);
$judul_lomba = $judul['judul'];

?>

<!--home-->
<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="lomba.php">Lomba</a></li>
								<li>Hasil</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div></br></br>

<!--hasil-->
<div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title"><?= $judul_lomba ?></h2></br></br>
						<section class="content container-fluid">
						       <div class="box">
						            <!-- /.box-header -->
						            <div class="box-body">
						                <table id="example2" class="table table-bordered table-striped">
						                    <thead>
						                        <tr>
													<th>No</th>
						                            <th>Nama</th>
						                            <th>Foto</th>
						                            <th>Nilai</th>
						                        </tr>
						                    </thead>
						                    <tbody>
											<?php
											$no = 1;
											while ($data = mysqli_fetch_assoc($query)) {
											?>

						                        <tr>
													<td><?= $no++; ?></td>
							                         <td><?=$data['nama']; ?></td>
						                            <td> <img width="80" src="admin/upload/<?=$data['foto_lomba'];?>" alt="img"> </td>
						                            <td><?=$data['rata-rata']; ?></td>
						                        </tr>
												<?php
												}
												?>
						                    </tbody>
						                </table>
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
<!--hasil-->



<?php include("footer.php") ?>
