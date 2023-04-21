<?php 
  include 'admin_area/functions/functions.php';
  include "./includes/connect.php";
?>
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between position-relative">

      <div class="logo">
        <a href="index.php"><img src="assets/img/images/sm-logo.png" alt="" class="img-fluid"></a>
      </div>
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <!-- <li><a class="nav-link scrollto" href="#events">INTRODUCE A HERO</a></li> -->
          <li><a class="nav-link scrollto" href="team.php">Team</a></li>
          <li><a class="nav-link scrollto" href="about.php">About Us</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact Us</a></li>
          <?php
            if(isset($_SESSION['auth'])){
                ?>
                <li class='nav-item dropdown profile'>
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="min-width:200px">
                        <img src="assets/img/profiles/<?=$_SESSION['user']['profile_pic']?>" height=50 width=50 style="border-radius:50%;"><span class="px-2"><?php echo $_SESSION['user']['username']?></span>
                    </a>
                    <ul class="dropdown-menu text-center" style="width:96%">
                        <li>
                          <a class="dropdown-item d-block" href="#"><img src="assets/img/profiles/<?=$_SESSION['user']['profile_pic']?>" height=80 width=80 style="border-radius:50%;margin:auto;">
                            <p class="py-2">
                              <span style="font-size:18px;font-weight:100"><?php echo $_SESSION['user']['username']?></span><br>
                              <span class="" style="font-size:12px;font-weight: lighter;"><?php echo $_SESSION['user']['email']?></span>
                            
                            </p>
                          </a>
                        </li>
                        <li><a class="dropdown-item border-top bg-light py-2" href="./edit_profile.php">Edit profile<i class="bi bi-pencil"></i></a></li>
                        <li><a class="dropdown-item bg-light py-2 text-danger" href="?logout">Logout<i class="bi bi-leftarrow"></i></a></li>
                    </ul>
                </li>
            <?php
            }
            else{
                // header('location:index.php');
                echo "<li class='nav-item'>
                <a class='nav-link btn' href='./login-page.php' style='border:2px solid white; height:40px;'>Login</a>
                </li>";
            }
            
            ?>
        </ul>
        <?php
            if(isset($_GET['logout'])){
                logout();
            }
        ?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>