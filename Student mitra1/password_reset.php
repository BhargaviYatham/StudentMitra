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
                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\SMTP;
                use PHPMailer\PHPMailer\Exception;
        
                require 'PHPMailer/src/Exception.php';
                require 'PHPMailer/src/PHPMailer.php';
                require 'PHPMailer/src/SMTP.php';
                function send_password_reset($name,$get_email,$token){
                    $mail=new PHPMailer(true);
            
                    $mail->isSMTP();
                    $mail->Host="smtp.gmail.com";
                    $mail->SMTPAuth=true;
                    $mail->Username='teamstudentmitra2k@gmail.com';
                    $mail->Password='gehyjbcmvghedmuw';
                    $mail->SMTPSecure='ssl';
                    $mail->Port=465;
        
                    $mail->setFrom('teamstudentmitra2k@gmail.com',$name);
                    $mail->addAddress($get_email);
        
                    $mail->isHtml(true);
                    $mail->Subject="Reset Password Link";
                    $email_template="
                    <h2>Hello</h2>
                    <h4>You are receiving this email to reset your password request from your account.</h4>
                    <br><br>
                    <a href='http://localhost/student%20mitra/password-change.php?token=$token&email=$get_email'>Click me</a>
                    ";
                    $mail->Body=$email_template;
                    $mail->send();
                }
                if(isset($_POST['reset'])){
                    $email=mysqli_real_escape_string($con,$_POST['email']);
                    $token = md5(rand());
        
                    $check_email="SELECT * from users where email='$email'";
                    $result_select=mysqli_query($con,$check_email);
                    if(mysqli_num_rows($result_select)){
                        $row=mysqli_fetch_assoc($result_select);
                        $name=$row['full_name'];
                        $get_email=$row['email'];
        
                        $update_token="UPDATE users SET verify_token='$token' WHERE email='$get_email'";
                        $result_update=mysqli_query($con,$update_token);
            
                        if($result_update){
                            send_password_reset($name,$get_email,$token);
                            echo "<div class='alert alert-success'>Password reset file sent</div>";                    
                        }
                        else{
                            echo "<div class='alert alert-warning'>something went Found</div>";
                            header('Location:password_reset.php');
                            exit(0);                     
                        }
                    }
                    else{
                        echo "<div class='alert alert-warning'>Email not Found</div>";                
                    }
                }
                ?>
                <h1 class="form-title">FORGET PASSWORD</h1>
                    <label for="email">Email</label>
                        <input type="email" name="email" required>
                    <button type="submit" name='reset' class="submit-btn">Send Mail</button>
                </form>
                    <p >Don't have an account? <a href="register.php">Register</a></p> 
            </div>
    
         <!-- footer -->
        <?php
            include "includes/footer.php";
        ?>
           
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