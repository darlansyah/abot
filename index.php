<?php
include('header.php');
//include ('admin/koneksi.php');

$id_user = $_SESSION['id_user'];

$query_lomba = "SELECT * FROM lomba_detail where id_peserta = $id_user " ;

$data_lomba = mysqli_query($link,$query_lomba);

$fetch_lomba = mysqli_fetch_array($data_lomba);

?>

<!--home-->

<!--List Lomba-->
<br/><br/><br/><br/><br/>
<div class="courses">
    <div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">KFI REG D.I.Yogyakarta</h2>
                    <div class="section_subtitle"><p>silahkan pilih lomba yang tersedia</p></div>
                </div>
            </div>
        </div>
        <div class="row courses_row">

            <?php
            $sql = "SELECT * FROM `lomba`
                    WHERE status_lomba = 'Posting'
                    ORDER BY `lomba`.`id_lomba`  DESC
                    LIMIT 3";
            $query = mysqli_query($link, $sql);
            while($data = mysqli_fetch_array($query)){
            ?>
            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img width="400" src="admin/upload/<?php echo $data['foto'];?>" alt=""></div>
                    <div class="course_body">
                        <h3 class="course_title"><a href="status_peserta.php?id=<?php echo $data['id_lomba'];?>"><?php echo $data['judul'];?></a></h3>
                    </div>
                    <div class="course_footer">
                      <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">

                          <?php
                          if($fetch_lomba['id_peserta'] && $fetch_lomba['foto_bukti_pembayaran'] && ($data['id_lomba'] == $fetch_lomba['id_lomba'])){
                            ?>
                              <a class="course_price ml-auto" href="status_peserta.php?id=<?php echo $data['id_lomba'];?>">Upload</a>
                              <?php
                          }
                          else {
                          ?>
                          <div class="course_info">
                            <i aria-hidden="true"></i>
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
        <div class="row">
            <div class="col">
                <div class="courses_button trans_200"><a href="lomba.php">Lihat semua lomba</a></div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
