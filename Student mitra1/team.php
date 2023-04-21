<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SM Team</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
 <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- ======= Header ======= -->
<?php include_once 'includes/navbar.php'; ?>

   <!-- ======= Who are we ===== ---->
 <section id="team" class="team d-flex align-items-center">
    <div class="container">
      <div class="row"  data-aos="fade-up">   
     <div class="col-lg-6 col-xl-8 mt-5">
        <h2>TEAM</h2>
        <blockquote>
          <p style="font-family:arial;">We the team StudentMitra are working with 100+ skilled volunteers where core team lead the team in situations like while making crucial decisions, planning ideas and event management</p>
        </blockquote>
      </div>
      <div class="col-lg-6 text col-xl-4 ">
      <img src="assets/img/Sections/Team work.gif" style="widht:530px; height:60vh; background-color:red; " alt="">
      </div> 

      </div>
    </div>
  </section><!-- End who are we-->

  <main id="main"> 
<!--core team members-->
<section id="c_team" class="c_team bg-light" style="margin-top:10px;">
    <div class="container">
      
        <div class="section-header">
            <h2>CORE TEAM</h2>
          </div>

      <div class="row">

      <?php
          global $con;
          $select_query='select * from newteam';
          $result_select=mysqli_query($con,$select_query);
          if($result_select){
              while($row=mysqli_fetch_assoc($result_select)){
                $name=$row['m_name'];
                $position=$row['m_position'];
                $email=$row['m_email'];
                $insta=$row['insta'];
                $linked=$row['linked'];
                $mem_img=$row['mem_img'];
                ?>
                <div class="col-lg-3 col-md-6 col-*">
                  <div class="member">
                    <div class="pic"><img src='assets/img/imgTeam/<?php echo "$mem_img"; ?>' height=150 width=150 alt=""></div>
                    <div class="member-info">
                      <h4><?php echo "$name";?></h4>
                      <h3><span><?php echo "$position"; ?></span></h3> 
                      <span><?php echo "$email";?></span> 
                      <div class="social">
                        <a href='<?php echo "$insta";?>'><i class="bi bi-instagram"></i></a>
                        <a href='<?php echo "$linked" ;?>'><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
          }
        ?>


          
        

    </div>
  </section><!-- End core section-->

  <!--==seniors team==-->
  
<!--senior core members-->
<section class="bg-white" data-aos="fade-up">
    <div class="section-header">
        <h2>SENIOR TEAM</h2>
        <p>Former Core Team</p>
      </div>   
<div class="m-4">
    <ul class="nav nav-pills justify-content-center" id="myTab">
        <li class="nav-item">
            <a href="#home" class="nav-link active">2019</a>
        </li>
        <?php
          global $con;
          $select_query='select * from oldteam';
          $result_select=mysqli_query($con,$select_query);
          if($result_select){
              while($row=mysqli_fetch_assoc($result_select)){
                 $id=$row['team_id'];
                 $team_title=$row['team_title'];
                ?>
                <li class="nav-item">
                    <a href="#team<?php echo "$id";?>" class="nav-link"><?php echo "$team_title";?></a>
                </li>
                <?php
              }
          }
        ?>
    </ul>
    <div class="tab-content">
        <div class='tab-pane fade show active' id='home'>
            <section id='clients' class='clients'>
              <div class='container' data-aos='zoom-in'>
                    <div class='col-lg-6 m-auto'><img src='assets/img/nuzvid.jpg' class='img-fluid'></div>
              </div>
            </section>   
        </div>
        <?php
          global $con;
          $select_query='select * from oldteam';
          $result_select=mysqli_query($con,$select_query);
          if($result_select){
              while($row=mysqli_fetch_assoc($result_select)){
                 $id=$row['team_id'];
                 $team_title=$row['team_title'];
                 $team_img=$row['team_img'];
                ?>
                 <div class='tab-pane fade' id='team<?php echo "$id";?>'>
                 <section id='clients' class='clients'>
                   <div class='container' data-aos='zoom-in'>
                         <div class='col-lg-6 m-auto'><img src='assets/img/imgTeam/<?php echo "$team_img";?>' class='img-fluid'></div>
                   </div>
                 </section>   
             </div>
             <?php
              }
          }
        ?>
    </div>
</div>
</section>  <!--End seniors Team-->


    <!--==Web developers Team===-->
    <section class="bg-light" data-aos="fade-up"><!--Developers-->
     
     <div class="container">
         <div class="section-header">
             <h2>WEB TEAM</h2>
           </div>
         <div class="row d-flex justify-content-center">
             <div class="col-lg-3 col-md-6 col-s-6">
                 <div class="webteam">
                     <div class="pic">
                         <img src="assets/img/imgTeam/gangadhar.jpg">
                     </div>
                     <div class="team-content">
                         <h3 class="title">Munuri Gangadhar</h3>
                         <span class="post">Fullstack Developer</span>
                         <ul class="social">
                             <li><a href=""><i class='bx bxl-instagram'></i> </a></li>
                             <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                             <li><a href="#"><i class='bx bxl-linkedin'></i></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <div class="webteam">
                     <div class="pic">
                         <img src="./assets/img/imgTeam/bhargavi.png">
                     </div>
                     <div class="team-content">
                         <h3 class="title">Y.Bhargavi</h3>
                         <span class="post">Fullstack Developer</span>
                         <ul class="social">
                             <li><a href=""><i class='bx bxl-instagram'></i> </a></li>
                             <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                             <li><a href="#"><i class='bx bxl-linkedin'></i></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6" >
                 <div class="webteam">
                     <div class="pic">
                         <img src="">
                     </div>
                     <div class="team-content">
                         <h3 class="title">Rajia Sulthana</h3>
                         <span class="post">UI/UX Designer</span>
                         <ul class="social">
                             <li><a href=""><i class='bx bxl-instagram'></i> </a></li>
                             <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                             <li><a href="#"><i class='bx bxl-linkedin'></i></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
 
 </section><!--End Developers-->

  </main><!-- End #main -->
  
<!--====footer====-->
 <!--footer starts-->
  <?php
    include "includes/footer.php";
  ?>
  <!--footer ends-->
 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>