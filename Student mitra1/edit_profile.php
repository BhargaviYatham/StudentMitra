<?php
if(isset($_SESSION['user'])){
    echo "<script>window.location.href='login-page.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentMitra | edit-profile</title>

    <!-- Favicons -->
  <link href="./assets/img/favicon.png" rel="icon">
  <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <link href="./assets/css/style.css" rel="stylesheet">

</head>
<body class="bg-light">
    <!-- navbar -->
    <section style="background-color:rgb(7, 90, 122);">
        <?php include_once 'includes/navbar.php' ?>
    </section>
    <!-- edit profile container -->
    <section class="edit-profile "> 
    <div class="container bg-white" >
    <?php
        if(isset($_POST['update_profile'])){
            update_profile();
        }
    ?>
        <h4 class="text-center">Edit Profile</h4>
        <img src="./assets/img/profiles/<?=$_SESSION['user']['profile_pic']?>" class="img-thumbnail img-fluid" height=150 width=150 />
        <section >
            <div class="container-fluid">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-lg-6 col-* form-group mb-4 ">
                        <label for="" class="for-label mb-2">change profile picture</label>
                        <input type="file" name="profile_pic" class="form-control"  autocomplete='off'>
                    </div>
                    <div class="col-lg-6 col-* form-group mb-4 ">
                    <label for="" class="for-label mb-2">Full Name</label>
                        <input type="text" name="full_name" placeholder="enter name" class="form-control" aria-describedby="basic-addon1" value="<?=$_SESSION['user']['full_name']?>">
                    </div>
                    <div class="col-lg-6 col-* form-group mb-4 ">
                    <label for="" class="for-label mb-2">Email</label>
                        <input type="email" name="email" placeholder="email" class="form-control" aria-describedby="basic-addon1" value="<?=$_SESSION['user']['email']?>">
                    </div>
                    <div class="col-lg-6 col-* form-group mb-4">
                        <label for="" class="for-label mb-2">username</label>
                        <input type="text" name="username" placeholder="enter username" class="form-control" aria-describedby="basic-addon1" value="<?=$_SESSION['user']['username']?>">
                    </div>
                    <div class="form-outline mb-4 col-lg-5 ">
                        <input type="Submit" name="update_profile" value="Update Profile" class="form-control w-50 bg-warning" required>
                    </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
  </section>

  <!-- footer -->
    <?php include_once 'includes/footer.php' ?>

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