<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Mitra | Unlock the doors of Imagination</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <link rel="stylesheet" href="assets/css/login-page.css">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
         <!-- top header -->
         <section style="background-color:rgb(7, 90, 122);">
            <?php include_once 'includes/navbar.php' ?>
        </section>
            <!--LOGIN FORM-->
            <div class="form-layer transition"  id="login">
                <form action="" method="POST" class="form">
                <?php
                    if(isset($_POST['change'])){
                        change_password();
                    }
                ?>
                <h1 class="form-title">Change Password</h1>
                <input type="hidden" name="password_token" value="<?php if(isset($_GET['token'])){echo $_GET['token']; }?>" >
                    <label for="user">Email</label>
                        <input type="email" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>" required>
                        <div class="pss">
                            <label for="password">New Password</label>
                            <span><i class="fa fa-eye" onclick="toggleEye1()" id="eye1"></i></span>
                        </div>
                        <input type="password" name="password" id="l_password" required>

                        <div class="pss">
                            <label for="repassword">Confirm Password</label>
                            <span><i class="fa fa-eye" onclick="toggleEye2()" id="eye2"></i></span>
                        </div> 
                        <input type="password" name="repassword" id="r_password" required>     
                    <button type="submit" name='change' class="submit-btn">Change Password</button>
                </form>
                    <p><a  href="password_reset.php">Forgot password?</a></p>
                    <p >Don't have an account? <a href="register.php">Register</a></p> 
                    <p >Complete Verification!!! <a href="EmailVerify.php">verify-email</a></p> 
            </div>
    
         <!-- footer -->
        <?php
            include "includes/footer.php";
        ?>
        <script src="./js/script.js"></script>
        <script>
            var login_pwd_state = false;
                function toggleEye1(){
                    if(login_pwd_state){
                        document.getElementById("l_password").setAttribute("type","password");
                        document.getElementById("eye1").style.color = '#7a797e';
                        login_pwd_state = false;
                    }
                    else{
                        document.getElementById("l_password").setAttribute("type","text");
                        document.getElementById("eye1").style.color = "orange";
                        login_pwd_state = true;
                    }
                }

            var register_pwd_state = false;
                function toggleEye2(){
                    if(register_pwd_state){
                        document.getElementById("r_password").setAttribute("type","password");
                        document.getElementById("eye2").style.color = '#7a797e';
                        register_pwd_state = false;
                    }
                    else{
                        document.getElementById("r_password").setAttribute("type","text");
                        document.getElementById("eye2").style.color = "orange";
                        register_pwd_state = true;
                    }
                }
        </script>
    
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