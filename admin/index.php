<?php include('header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col">
                <div align="text-center" class="section_title_container text-center">
                    <h2 class="section_title"><p><b>Komunitas Fotografi Indonesia</b></p>
                                              <p><b>REG D.I.Yogyakarta</b></p></h2>
                </div>
            </div>
        </div><br/><br/><br/><br/>
         <?php
            $sql = "SELECT * FROM `lomba`
                    WHERE status_lomba = 'Posting'
                    ORDER BY `lomba`.`id_lomba`  DESC
                    LIMIT 3";
            $query = mysqli_query($link, $sql);
            while($data = mysqli_fetch_array($query)){
            ?>
           <div class="col-lg-4 course_col">
               <div class="course">
                   <div align="center" class="pull-left image">
                       <img width="300" height="300" class="img-circle" src="upload/<?php echo $data['foto'];?>" alt="">
                   </div>
               </div>
           </div>
                <?php } ?>
           </br></br></br></br>
        <div class="row">
            <div class="col">
                <h3 align="center" class="box-title"><a href="lomba.php" class="btn btn-info">Lihat semua lomba</a>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>