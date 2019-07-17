<?php
include('header.php');
//include ('admin/koneksi.php');

$id_user = $_SESSION['id_user'];

$query_lomba = "SELECT * FROM lomba_detail where id_peserta = $id_user ";

$data_lomba = mysqli_query($link,$query_lomba);

$fetch_lomba = mysqli_fetch_array($data_lomba);

// if($fetch_lomba['id_peserta'] && $fetch_lomba['foto_bukti_pembayaran']){
//   echo 'UPLOAD';
// }
// else {
//   echo "HARGA";
// }

//var_dump($fetch_lomba);
// die;


?>


<!--home-->

<div class="owl-item">
    <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
    <div class="home_slider_content">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="home_slider_title">The Premium System Education</div>
                    <div class="home_slider_subtitle">Future Of Education Technology</div>
                    <div class="home_slider_form_container">
                        <form action="#" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                            <div class="d-flex flex-row align-items-center justify-content-start">
                                <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
                                <select class="dropdown_item_select home_search_input">
                                    <option>Category Courses</option>
                                    <option>Category</option>
                                    <option>Category</option>
                                </select>
                                <select class="dropdown_item_select home_search_input">
                                    <option>Select Price Type</option>
                                    <option>Price Type</option>
                                    <option>Price Type</option>
                                </select>
                            </div>
                            <button type="submit" class="home_search_button">search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--List Lomba-->

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
            $sql = "select * from lomba where status_lomba = 'Posting'";
            $query = mysqli_query($link, $sql);
            while($data = mysqli_fetch_array($query)){
            ?>
            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="admin/upload/<?php echo $data['foto'];?>" alt=""></div>
                    <div class="course_body">
                        <h3 class="course_title"><a href="detail_lomba.php?id=<?php echo $data['id_lomba'];?>"><?php echo $data['judul'];?></a></h3>
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
        <div class="row">
            <div class="col">
                <div class="courses_button trans_200"><a href="lomba.php">view all courses</a></div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
