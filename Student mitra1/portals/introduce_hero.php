<?php
    include '../admin_area/functions/functions.php';
    include "../includes/connect.php";
    if(isset($_SESSION['user'])){
        $current_user=$_SESSION['user']['user_id'];
    }
    else{
        $current_user=0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduce a hero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Oswald:wght@600&display=swap" rel="stylesheet">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
        body{
            overflow-x: hidden;
            min-height: 100vh;
        }
        html{
        scroll-behavior: smooth;
        }
        #side_nav{
            height:100vh;
            min-width: 250px;
            max-width:250px;
            transition: all 0.3s;
            margin-top: 91px;
            top: 0;
            left: 0;
            background:rgb(242, 242, 242);
            color:black;

        }
        .content .navbar{
           height:90px;
           font-family: 'Montserrat', sans-serif;
           font-weight:800;
        
        }
        .head i{
            font-size:20px;
            font-weight: 400;
            
        }
        .sidebar li a{
            color: white;
            font-size:large;
        }
        .sidebar li a:hover{
           font-weight:1000;
           background-color:#feefc3;
           color:black;
           border-radius:0px 30px 30px 0px ;
    
        }
        .sidebar li.active{
            background-color: white;
        }
        .sidebar li.active{
            background-color: white;
        }
        .sidebar li.active a,.sidebar li.active a:hover{
            color: #000;
        }
        .collapse form{
            position: absolute;
            left: 6pc;
        }
        nav ul li .nav-link{
            color:white;
        }
        .sidebar ul li img{
            width: 50px;
            height: 40px;
            border-radius: 8%;
        }
        .sidebar ul li span{
            font-family: 'Cabin', sans-serif;
            /* -webkit-text-stroke: 0.06px orange; */
            letter-spacing:1.5px;
            font-size: 16px;
            color:black;
        }
        .gallery{
            width:calc(100% - 250px);
            position: absolute;
            top:4pc;
            left:250px;
        }
        .gallery .col{
            height:200px;
            margin-top:55px;
        }
        .gallery .post_img{
            width: 100%;
            height:100%;
            border-radius:5px;
        }
        .gallery .model-img{
            width: 100%;
            height:100%;
            border-radius:5px;
        }
        .content .navbar{
                z-index: 1;
        }
        .nav-item{
            color:white;
        }
        .unlike-btn{
            color:rgb(206, 32, 154);
        }

        @media screen and (max-width:767px) {
            #side_nav{
                margin-left: -250px;
                position: fixed;
                margin-top:0px;
                z-index:2;
            }
            #side_nav.active{
                margin-left: 0;
            }
            .collapse form{
                position: relative;
                left: 0;
            }
            .gallery{
                width: 100%;
                position: relative;  
                left: 0;
                top:50px;
            }
            .gallery .col{
                height:200px;
                margin-top:60px;
            }

            
        }
        .modal-footer img{
            border-radius: 50%;
        }
        .navbar-nav .btn{
            outline:none;
            margin:none;
            border:2px solid white;
            transition:all 0.3s;
            color:white;
            width:100px;
            border-radius:50%;

        }
        .navbar-nav .btn:hover{
            outline:none;
            margin:none;
            color:white;
            background-color:orange;

        }
    </style>
</head>
<body>
    <div class="main-container d-flex">
        <div class="sidebar fixed-top" id="side_nav">
            <div class="header-box d-flex justify-content-between bg-light">
                <!-- <h1 class="fs-4"><span class="bg-white text-dark shadow px-2 me-2">SM</span></h1> -->
                <!-- <span class="text-dark px-2 py-2 head "><i class="bi bi-arrow-right-circle-fill text-warning"></i> INTRODUCE A HERO</span> -->
                <!-- <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="fal fa-stream"></i></button> -->
            </div>
            <ul class="list-unstyled py-4">
                <li><a href="introduce_hero.php?type=1" class="text-decoration-none px-4 py-2 d-block">
                    <img src="../assets/img/images/home1.jpeg">
                    <span class="px-3">Photography</span>
                </a></li>
                <li><a href="introduce_hero.php?type=2" class="text-decoration-none px-4 py-2 d-block">
                    <img src="../assets/img/images/home1.jpeg">
                    <span class="px-3">Painting</span>
                </a></li>
                <li><a href="introduce_hero.php?type=3" class="text-decoration-none px-4 py-2 d-block">
                    <img src="../assets/img/images/home1.jpeg">
                    <span class="px-3">Singing</span>
                </a></li>
                <li><a href="introduce_hero.php?type=4" class="text-decoration-none px-4 py-2 d-block">
                    <img src="../assets/img/images/home1.jpeg">
                    <span class="px-3">Crafting</span>
                </a></li>
            </ul>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand-lg fixed-top " style="background: rgb(11 132 179);box-shadow: 0px 0px 0px gray;">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex" href="#">
                        <img src="../assets/img/images/sm-logo.png"  height="55" width="70" alt="logo" >
                        <button class="btn open-btn text-white d-md-none d-block"><i class="fal fa-stream"></i></button>
                    </a>
                    <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-light" ></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end px-5" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <form class="d-flex px-1" action="introduce_hero.php" role="search" method="post">
                                <input class="form-control me-2 mt-3" style="border-radius:30px;" name="searchip"  type="search" placeholder="Search" aria-label="Search">
                                <input class="btn  mt-3 px-2" value='Search' style="border-radius: 20px;" type="search" name="search">
                            </form>
                        <li class="nav-item px-4 py-2 ">
                        <a class="nav-link" href="../index.php">HOME</a>
                        </li>
                        <li class="nav-item px-4 py-2 ">
                        <a class="nav-link" href="../about.php">ABOUT</a>
                        </li>
                        <li class="nav-item px-4 py-2 ">
                        <a class="nav-link" href="../team.php">TEAM</a>
                        </li>
                        <li class="nav-item px-4 py-2">
                        <a class="nav-link" href="../contact.php">CONTACT US</a>
                        </li>
                        <?php
                            if(isset($_SESSION['auth'])){
                                ?>
                                <li class='nav-item dropdown profile'>
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="min-width:200px">
                                        <img src="../assets/img/profiles/<?=$_SESSION['user']['profile_pic']?>" height=50 width=50 style="border-radius:50%;"><span class="px-2"><?php echo $_SESSION['user']['username']?></span>
                                    </a>
                                    <ul class="dropdown-menu text-center" style="width:96%">
                                        <li>
                                        <a class="dropdown-item d-block" href="#"><img src="../assets/img/profiles/<?=$_SESSION['user']['profile_pic']?>" height=80 width=80 style="border-radius:50%;margin:auto;">
                                            <p class="py-2">
                                            <span style="font-size:18px;font-weight:100"><?php echo $_SESSION['user']['username']?></span><br>
                                            <span class="" style="font-size:12px;font-weight: lighter;"><?php echo $_SESSION['user']['email']?></span>
                                            
                                            </p>
                                        </a>
                                        </li>
                                        <li><a class="dropdown-item border-top bg-light py-2" href="../edit_profile.php">Edit profile <i class="bi bi-pencil"></i></a></li>
                                        <li><a class="dropdown-item bg-light py-2 text-danger" href="?logout">Logout<i class="bi bi-leftarrow"></i></a></li>
                                    </ul>
                                </li>
                            <?php
                            }
                            else{
                                echo "<li class='nav-item'>
                                <a class='nav-link btn btn-warning px-4 py-2' href='../login-page.php' style='color: black; border-radius:0%; margin: 6px 0px 0px 40px;'>Login</a>
                                </li>";
                            }
                            
                            ?>
                        </ul>
                        <?php
                            if(isset($_GET['logout'])){
                                logout();
                            }
                        ?>
                    </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid gallery min-vh-100">      
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
                <?php
                 if(isset($_GET['type'])){
                    global $con;
                    $type=$_GET['type'];
                    $select_query="SELECT posts.post_id,posts.username,users.username,users.profile_pic,posts.post_img,posts.post_text,posts.post_type FROM posts JOIN users ON users.email=posts.username and posts.post_type=$type ORDER BY RAND()";
                    $result_select=mysqli_query($con,$select_query);
                    if($result_select){
                        while($row=mysqli_fetch_assoc($result_select)){
                            $id=$row['post_id'];
                            $user_name=$row['username'];
                            $user_img=$row['profile_pic'];
                            $post_img=$row['post_img'];
                            $post_text=$row['post_text'];
                            $ext=pathinfo($post_img,PATHINFO_EXTENSION);
                            ?>
                            <div class="col">
                                <?php 
                                if($ext=='mp4' or $ext=='mp3'){
                                ?>

                                    <i class="bi bi-play-circle px-1" style="position:absolute;"></i>
                                    <video data-bs-toggle="modal" data-bs-target='<?php echo "#h$id"?>' class=" model-img" style="border:1px solid black;width:100%">
                                        <source src='<?php echo "../admin_area/sm_img/$post_img"?>' type="video/mp4" >
                                    </video>  
                                    <div class=" mt-2 p-1" ><img src="../assets/img/profiles/<?php echo $user_img ?>" height="30" width="30" class="rounded-circle border-bottom"> <span class="m-0" style="font-size:13px"><?php echo $user_name ?></span></div>
                                    <div class="modal fade" id='h<?php echo "$id"?>' tabindex="-1" aria-labelledby="img_popup" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered bg-none">
                                            <div class="modal-content">
                                                <div class="modal-body d-md-flex p-0">
                                                    <div class="col-lg-8 col-md-7">
                                                        <video class="w-100 model-img" controls>               
                                                            <source src='<?php echo "../admin_area/sm_img/$post_img"?>' type="video/mp4" >
                                                        </video>
                                                    </div>
                                                    <div class="col-lg-4 col-md-5 d-flex flex-column">
                                                        <div class="px-2 border-bottom">
                                                            <div class="d-flex align-items-center py-2">
                                                                <div><img src='../assets/img/profiles/<?php echo "$user_img";?>' height="50" width="50" class="rounded-circle"></div>
                                                                <div>&nbsp;&nbsp;&nbsp;</div>
                                                                <div>
                                                                    <h6 class="m-0"><?php echo "$user_name";?></h6>
                                                                </div>
                                                            </div>
                                                            <p class="px-5"><?php echo "$post_text";?></p>
                                                        </div>
                                                        <div class="flex-fill align-self-stretch overflow-auto" id="comment-section<?php echo $id; ?>" style="height:20vh;">   
                                                            <?php
                                                                $select_query1="SELECT * from comments where post_id=$id";
                                                                $result_select1=mysqli_query($con,$select_query1);
                                                                while($comment=mysqli_fetch_assoc($result_select1)){
                                                                    
                                                                    $select_query2="SELECT * from users where user_id=$comment[user_id]";
                                                                    $result_select2=mysqli_query($con,$select_query2);
                                                                    $user=mysqli_fetch_assoc($result_select2);
                                                            ?>
                                                            <div class="d-flex align-items-center p-2">
                                                                <div><img src="../assets/img/profiles/<?php echo $user['profile_pic'] ?>" height="30" width="30" class="rounded-circle border-bottom"></div>
                                                                <div class="d-flex px-2 flex-column justify-content-start align-items-start">
                                                                    <h6 class="m-0">@<?php echo $user['username'] ?></h6>
                                                                    <p class="text-muted"><?php echo $comment['comment'];?></p>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>

                                                        <div class="d-flex justify-content-between border-top" style="font-size: 25px;">
                                                            <span>
                                                                <?php 
                                                                if(checkLikeStatus($current_user,$id)){
                                                                    $like_btn_display='none';
                                                                    $unlike_btn_display='';
                                                                }
                                                                else{
                                                                    $unlike_btn_display='none';
                                                                    $like_btn_display='';
                                                                }
                                                                ?>
                                                                <i class="px-4 bi bi-heart-fill unlike-btn" style="display:<?php echo $unlike_btn_display;?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' data-like="like<?php echo $id; ?>"></i>
                                                                <i class="px-4 bi bi-heart like-btn" style="display:<?php echo $like_btn_display;?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' data-like="like<?php echo $id; ?>"></i>
                                                            </span>
                                                            
                                                            <i class="px-4 bi bi-chat"></i>
                                                        </div>
                                                        <div class="d-flex justify-content-between" style="font-size: 16px;">
                                                            <span class="px-4 text-muted" id="like<?php echo $id; ?>" ><?php echo likecount($id);echo ' likes';?></span>
                                                            <span class="px-4 text-muted" id="comment<?php echo $id; ?>"><?php echo commentcount($id);echo ' comments';?></span>
                                                        </div>
                                                        <div class="input-group p-2 border-top">
                                                            <input type="text" name="" class="form-control rounded-0 border-0 comment-input" placeholder="Add a comment" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                            <button class="btn btn-outline-primary rounded-1 border-0 add-comment" type="button" data-comment-id="comment<?php echo $id;?>" data-cs="comment-section<?php echo $id; ?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' id="button-addon2">Post</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }


                                else{
                                ?>

                                    <img src='<?php echo "../admin_area/sm_img/$post_img"?>' data-bs-toggle="modal" data-bs-target='<?php echo "#h$id"?>' class="post_img">
                                    <div class=" mt-2 p-1" ><img src="../assets/img/profiles/<?php echo $user_img ?>" height="30" width="30" class="rounded-circle border-bottom"> <span class="m-0" style="font-size:13px"><?php echo $user_name ?></span></div>
                                    <div class="modal fade" id='h<?php echo "$id"?>' tabindex="-1" aria-labelledby="img_popup" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered bg-none">
                                            <div class="modal-content">
                                                <div class="modal-body d-md-flex p-0">
                                                    <div class="col-lg-8 col-md-7">
                                                        <img src='<?php echo "../admin_area/sm_img/$post_img"?>' class="w-100 model-img">
                                                    </div>
                                                    <div class="col-lg-4 col-md-5 d-flex flex-column">
                                                        <div class="px-2 border-bottom">
                                                            <div class="d-flex align-items-center py-2">
                                                                <div><img src='../assets/img/profiles/<?php echo "$user_img";?>' height="50" width="50" class="rounded-circle"></div>
                                                                <div>&nbsp;&nbsp;&nbsp;</div>
                                                                <div>
                                                                    <h6 class="m-0"><?php echo "$user_name";?></h6>
                                                                </div>
                                                            </div>
                                                            <p class="px-5"><?php echo "$post_text";?></p>
                                                        </div>
                                                        <div class="flex-fill align-self-stretch overflow-auto" id="comment-section<?php echo $id; ?>" style="height:20vh;">   
                                                            <?php
                                                                $select_query1="SELECT * from comments where post_id=$id";
                                                                $result_select1=mysqli_query($con,$select_query1);
                                                                while($comment=mysqli_fetch_assoc($result_select1)){
                                                                    
                                                                    $select_query2="SELECT * from users where user_id=$comment[user_id]";
                                                                    $result_select2=mysqli_query($con,$select_query2);
                                                                    $user=mysqli_fetch_assoc($result_select2);
                                                            ?>
                                                            <div class="d-flex align-items-center p-2">
                                                                <div><img src="../assets/img/profiles/<?php echo $user['profile_pic'] ?>" height="30" width="30" class="rounded-circle border-bottom"></div>
                                                                <div class="d-flex px-2 flex-column justify-content-start align-items-start">
                                                                    <h6 class="m-0">@<?php echo $user['username'] ?></h6>
                                                                    <p class="text-muted"><?php echo $comment['comment'];?></p>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>

                                                        <div class="d-flex justify-content-between border-top" style="font-size: 25px;">
                                                            <span>
                                                                <?php 
                                                                if(checkLikeStatus($current_user,$id)){
                                                                    $like_btn_display='none';
                                                                    $unlike_btn_display='';
                                                                }
                                                                else{
                                                                    $unlike_btn_display='none';
                                                                    $like_btn_display='';
                                                                }
                                                                ?>
                                                                <i class="px-4 bi bi-heart-fill unlike-btn" style="display:<?php echo $unlike_btn_display;?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' data-like="like<?php echo $id; ?>"></i>
                                                                <i class="px-4 bi bi-heart like-btn" style="display:<?php echo $like_btn_display;?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' data-like="like<?php echo $id; ?>"></i>
                                                            </span>
                                                            
                                                            <i class="px-4 bi bi-chat"></i>
                                                        </div>
                                                        <div class="d-flex justify-content-between" style="font-size: 16px;">
                                                            <span class="px-4 text-muted" id="like<?php echo $id; ?>" ><?php echo likecount($id);echo ' likes';?></span>
                                                            <span class="px-4 text-muted" id="comment<?php echo $id; ?>"><?php echo commentcount($id);echo ' comments';?></span>
                                                        </div>
                                                        <div class="input-group p-2 border-top">
                                                            <input type="text" name="" class="form-control rounded-0 border-0 comment-input" placeholder="Add a comment" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                            <button class="btn btn-outline-primary rounded-1 border-0 add-comment" type="button" data-comment-id="comment<?php echo $id;?>" data-cs="comment-section<?php echo $id; ?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' id="button-addon2">Post</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>

                            </div>

                    <?php
                        }
                    }
                }
                elseif(isset($_POST['search'])){
                    
                    global $con;
                    $value=$_POST['searchip'];
                    $select_query="SELECT posts.post_id,posts.username,users.username,users.profile_pic,posts.post_img,posts.post_text,posts.post_type FROM posts JOIN users ON users.email=posts.username and posts.keywords like '%$value%' ORDER BY RAND()";
                    $result_select=mysqli_query($con,$select_query);

                    if(mysqli_num_rows($result_select)>0){
                    if($result_select){
                        while($row=mysqli_fetch_assoc($result_select)){
                            $id=$row['post_id'];
                            $user_name=$row['username'];
                            $user_img=$row['profile_pic'];
                            $post_img=$row['post_img'];
                            $post_text=$row['post_text'];
                            $ext=pathinfo($post_img,PATHINFO_EXTENSION);
                            ?>
                            <div class="col">
                                <?php 
                                if($ext=='mp4' or $ext=='mp3'){
                                ?>

                                    <i class="bi bi-play-circle px-1" style="position:absolute;"></i>
                                    <video data-bs-toggle="modal" data-bs-target='<?php echo "#h$id"?>' class=" model-img" style="border:1px solid black;width:100%">
                                        <source src='<?php echo "../admin_area/sm_img/$post_img"?>' type="video/mp4" >
                                    </video>  
                                    <div class=" mt-2 p-1" ><img src="../assets/img/profiles/<?php echo $user_img ?>" height="30" width="30" class="rounded-circle border-bottom"> <span class="m-0" style="font-size:13px"><?php echo $user_name ?></span></div>
                                    <div class="modal fade" id='h<?php echo "$id"?>' tabindex="-1" aria-labelledby="img_popup" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered bg-none">
                                            <div class="modal-content">
                                                <div class="modal-body d-md-flex p-0">
                                                    <div class="col-lg-8 col-md-7">
                                                        <video class="w-100 model-img" controls>               
                                                            <source src='<?php echo "../admin_area/sm_img/$post_img"?>' type="video/mp4" >
                                                        </video>
                                                    </div>
                                                    <div class="col-lg-4 col-md-5 d-flex flex-column">
                                                        <div class="px-2 border-bottom">
                                                            <div class="d-flex align-items-center py-2">
                                                                <div><img src='../assets/img/profiles/<?php echo "$user_img";?>' height="50" width="50" class="rounded-circle"></div>
                                                                <div>&nbsp;&nbsp;&nbsp;</div>
                                                                <div>
                                                                    <h6 class="m-0"><?php echo "$user_name";?></h6>
                                                                </div>
                                                            </div>
                                                            <p class="px-5"><?php echo "$post_text";?></p>
                                                        </div>
                                                        <div class="flex-fill align-self-stretch overflow-auto" id="comment-section<?php echo $id; ?>" style="height:20vh;">   
                                                            <?php
                                                                $select_query1="SELECT * from comments where post_id=$id";
                                                                $result_select1=mysqli_query($con,$select_query1);
                                                                while($comment=mysqli_fetch_assoc($result_select1)){
                                                                    
                                                                    $select_query2="SELECT * from users where user_id=$comment[user_id]";
                                                                    $result_select2=mysqli_query($con,$select_query2);
                                                                    $user=mysqli_fetch_assoc($result_select2);
                                                            ?>
                                                            <div class="d-flex align-items-center p-2">
                                                                <div><img src="../assets/img/profiles/<?php echo $user['profile_pic'] ?>" height="30" width="30" class="rounded-circle border-bottom"></div>
                                                                <div class="d-flex px-2 flex-column justify-content-start align-items-start">
                                                                    <h6 class="m-0">@<?php echo $user['username'] ?></h6>
                                                                    <p class="text-muted"><?php echo $comment['comment'];?></p>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>

                                                        <div class="d-flex justify-content-between border-top" style="font-size: 25px;">
                                                            <span>
                                                                <?php 
                                                                if(checkLikeStatus($current_user,$id)){
                                                                    $like_btn_display='none';
                                                                    $unlike_btn_display='';
                                                                }
                                                                else{
                                                                    $unlike_btn_display='none';
                                                                    $like_btn_display='';
                                                                }
                                                                ?>
                                                                <i class="px-4 bi bi-heart-fill unlike-btn" style="display:<?php echo $unlike_btn_display;?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' data-like="like<?php echo $id; ?>"></i>
                                                                <i class="px-4 bi bi-heart like-btn" style="display:<?php echo $like_btn_display;?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' data-like="like<?php echo $id; ?>"></i>
                                                            </span>
                                                            
                                                            <i class="px-4 bi bi-chat"></i>
                                                        </div>
                                                        <div class="d-flex justify-content-between" style="font-size: 16px;">
                                                            <span class="px-4 text-muted" id="like<?php echo $id; ?>" ><?php echo likecount($id);echo ' likes';?></span>
                                                            <span class="px-4 text-muted" id="comment<?php echo $id; ?>"><?php echo commentcount($id);echo ' comments';?></span>
                                                        </div>
                                                        <div class="input-group p-2 border-top">
                                                            <input type="text" name="" class="form-control rounded-0 border-0 comment-input" placeholder="Add a comment" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                            <button class="btn btn-outline-primary rounded-1 border-0 add-comment" type="button" data-comment-id="comment<?php echo $id;?>" data-cs="comment-section<?php echo $id; ?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' id="button-addon2">Post</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }


                                else{
                                ?>

                                    <img src='<?php echo "../admin_area/sm_img/$post_img"?>' data-bs-toggle="modal" data-bs-target='<?php echo "#h$id"?>' class="post_img">
                                    <div class=" mt-2 p-1" ><img src="../assets/img/profiles/<?php echo $user_img ?>" height="30" width="30" class="rounded-circle border-bottom"> <span class="m-0" style="font-size:13px"><?php echo $user_name ?></span></div>
                                    <div class="modal fade" id='h<?php echo "$id"?>' tabindex="-1" aria-labelledby="img_popup" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered bg-none">
                                            <div class="modal-content">
                                                <div class="modal-body d-md-flex p-0">
                                                    <div class="col-lg-8 col-md-7">
                                                        <img src='<?php echo "../admin_area/sm_img/$post_img"?>' class="w-100 model-img">
                                                    </div>
                                                    <div class="col-lg-4 col-md-5 d-flex flex-column">
                                                        <div class="px-2 border-bottom">
                                                            <div class="d-flex align-items-center py-2">
                                                                <div><img src='../assets/img/profiles/<?php echo "$user_img";?>' height="50" width="50" class="rounded-circle"></div>
                                                                <div>&nbsp;&nbsp;&nbsp;</div>
                                                                <div>
                                                                    <h6 class="m-0"><?php echo "$user_name";?></h6>
                                                                </div>
                                                            </div>
                                                            <p class="px-5"><?php echo "$post_text";?></p>
                                                        </div>
                                                        <div class="flex-fill align-self-stretch overflow-auto" id="comment-section<?php echo $id; ?>" style="height:20vh;">   
                                                            <?php
                                                                $select_query1="SELECT * from comments where post_id=$id";
                                                                $result_select1=mysqli_query($con,$select_query1);
                                                                while($comment=mysqli_fetch_assoc($result_select1)){
                                                                    
                                                                    $select_query2="SELECT * from users where user_id=$comment[user_id]";
                                                                    $result_select2=mysqli_query($con,$select_query2);
                                                                    $user=mysqli_fetch_assoc($result_select2);
                                                            ?>
                                                            <div class="d-flex align-items-center p-2">
                                                                <div><img src="../assets/img/profiles/<?php echo $user['profile_pic'] ?>" height="30" width="30" class="rounded-circle border-bottom"></div>
                                                                <div class="d-flex px-2 flex-column justify-content-start align-items-start">
                                                                    <h6 class="m-0">@<?php echo $user['username'] ?></h6>
                                                                    <p class="text-muted"><?php echo $comment['comment'];?></p>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>

                                                        <div class="d-flex justify-content-between border-top" style="font-size: 25px;">
                                                            <span>
                                                                <?php 
                                                                if(checkLikeStatus($current_user,$id)){
                                                                    $like_btn_display='none';
                                                                    $unlike_btn_display='';
                                                                }
                                                                else{
                                                                    $unlike_btn_display='none';
                                                                    $like_btn_display='';
                                                                }
                                                                ?>
                                                                <i class="px-4 bi bi-heart-fill unlike-btn" style="display:<?php echo $unlike_btn_display;?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' data-like="like<?php echo $id; ?>"></i>
                                                                <i class="px-4 bi bi-heart like-btn" style="display:<?php echo $like_btn_display;?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' data-like="like<?php echo $id; ?>"></i>
                                                            </span>
                                                            
                                                            <i class="px-4 bi bi-chat"></i>
                                                        </div>
                                                        <div class="d-flex justify-content-between" style="font-size: 16px;">
                                                            <span class="px-4 text-muted" id="like<?php echo $id; ?>" ><?php echo likecount($id);echo ' likes';?></span>
                                                            <span class="px-4 text-muted" id="comment<?php echo $id; ?>"><?php echo commentcount($id);echo ' comments';?></span>
                                                        </div>
                                                        <div class="input-group p-2 border-top">
                                                            <input type="text" name="" class="form-control rounded-0 border-0 comment-input" placeholder="Add a comment" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                            <button class="btn btn-outline-primary rounded-1 border-0 add-comment" type="button" data-comment-id="comment<?php echo $id;?>" data-cs="comment-section<?php echo $id; ?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' id="button-addon2">Post</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>

                            </div>

                    <?php
                        }
                    }
                    }
                    else{
                        echo "<div class='col-lg-12 text-danger text-center' style='margin-top:80px;font-size:25px'>not found</div>";
                    }
                }
               

                else{

                    global $con;
                    $select_query="SELECT posts.post_id,posts.username,users.username,users.profile_pic,posts.post_img,posts.post_text,posts.post_type FROM posts JOIN users ON users.email=posts.username ORDER BY RAND()";
                    $result_select=mysqli_query($con,$select_query);
                    if($result_select){
                        while($row=mysqli_fetch_assoc($result_select)){
                            $id=$row['post_id'];
                            $user_name=$row['username'];
                            $user_img=$row['profile_pic'];
                            $post_img=$row['post_img'];
                            $post_text=$row['post_text'];
                            $ext=pathinfo($post_img,PATHINFO_EXTENSION);
                            ?>
                            <div class="col">
                                <?php 
                                if($ext=='mp4' or $ext=='mp3'){
                                ?>

                                    <i class="bi bi-play-circle px-1" style="position:absolute;"></i>
                                    <video data-bs-toggle="modal" data-bs-target='<?php echo "#h$id"?>' class=" model-img" style="border:1px solid black;width:100%">
                                        <source src='<?php echo "../admin_area/sm_img/$post_img"?>' type="video/mp4" >
                                    </video>  
                                    <div class=" mt-2 p-1" ><img src="../assets/img/profiles/<?php echo $user_img ?>" height="30" width="30" class="rounded-circle border-bottom"> <span class="m-0" style="font-size:13px"><?php echo $user_name ?></span></div>
                                    <div class="modal fade" id='h<?php echo "$id"?>' tabindex="-1" aria-labelledby="img_popup" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered bg-none">
                                            <div class="modal-content">
                                                <div class="modal-body d-md-flex p-0">
                                                    <div class="col-lg-8 col-md-7">
                                                        <video class="w-100 model-img" controls>               
                                                            <source src='<?php echo "../admin_area/sm_img/$post_img"?>' type="video/mp4" >
                                                        </video>
                                                    </div>
                                                    <div class="col-lg-4 col-md-5 d-flex flex-column">
                                                        <div class="px-2 border-bottom">
                                                            <div class="d-flex align-items-center py-2">
                                                                <div><img src='../assets/img/profiles/<?php echo "$user_img";?>' height="50" width="50" class="rounded-circle"></div>
                                                                <div>&nbsp;&nbsp;&nbsp;</div>
                                                                <div>
                                                                    <h6 class="m-0"><?php echo "$user_name";?></h6>
                                                                </div>
                                                            </div>
                                                            <p class="px-5"><?php echo "$post_text";?></p>
                                                        </div>
                                                        <div class="flex-fill align-self-stretch overflow-auto" id="comment-section<?php echo $id; ?>" style="height:20vh;">   
                                                            <?php
                                                                $select_query1="SELECT * from comments where post_id=$id";
                                                                $result_select1=mysqli_query($con,$select_query1);
                                                                while($comment=mysqli_fetch_assoc($result_select1)){
                                                                    
                                                                    $select_query2="SELECT * from users where user_id=$comment[user_id]";
                                                                    $result_select2=mysqli_query($con,$select_query2);
                                                                    $user=mysqli_fetch_assoc($result_select2);
                                                            ?>
                                                            <div class="d-flex align-items-center p-2">
                                                                <div><img src="../assets/img/profiles/<?php echo $user['profile_pic'] ?>" height="30" width="30" class="rounded-circle border-bottom"></div>
                                                                <div class="d-flex px-2 flex-column justify-content-start align-items-start">
                                                                    <h6 class="m-0">@<?php echo $user['username'] ?></h6>
                                                                    <p class="text-muted"><?php echo $comment['comment'];?></p>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>

                                                        <div class="d-flex justify-content-between border-top" style="font-size: 25px;">
                                                            <span>
                                                                <?php 
                                                                if(checkLikeStatus($current_user,$id)){
                                                                    $like_btn_display='none';
                                                                    $unlike_btn_display='';
                                                                }
                                                                else{
                                                                    $unlike_btn_display='none';
                                                                    $like_btn_display='';
                                                                }
                                                                ?>
                                                                <i class="px-4 bi bi-heart-fill unlike-btn" style="display:<?php echo $unlike_btn_display;?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' data-like="like<?php echo $id; ?>"></i>
                                                                <i class="px-4 bi bi-heart like-btn" style="display:<?php echo $like_btn_display;?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' data-like="like<?php echo $id; ?>"></i>
                                                            </span>
                                                            
                                                            <i class="px-4 bi bi-chat"></i>
                                                        </div>
                                                        <div class="d-flex justify-content-between" style="font-size: 16px;">
                                                            <span class="px-4 text-muted" id="like<?php echo $id; ?>" ><?php echo likecount($id);echo ' likes';?></span>
                                                            <span class="px-4 text-muted" id="comment<?php echo $id; ?>"><?php echo commentcount($id);echo ' comments';?></span>
                                                        </div>
                                                        <div class="input-group p-2 border-top">
                                                            <input type="text" name="" class="form-control rounded-0 border-0 comment-input" placeholder="Add a comment" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                            <button class="btn btn-outline-primary rounded-1 border-0 add-comment" type="button" data-comment-id="comment<?php echo $id;?>" data-cs="comment-section<?php echo $id; ?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' id="button-addon2">Post</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }


                                else{
                                ?>

                                    <img src='<?php echo "../admin_area/sm_img/$post_img"?>' data-bs-toggle="modal" data-bs-target='<?php echo "#h$id"?>' class="post_img">
                                    <div class=" mt-2 p-1" ><img src="../assets/img/profiles/<?php echo $user_img ?>" height="30" width="30" class="rounded-circle border-bottom"> <span class="m-0" style="font-size:13px"><?php echo $user_name ?></span></div>
                                    <div class="modal fade" id='h<?php echo "$id"?>' tabindex="-1" aria-labelledby="img_popup" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered bg-none">
                                            <div class="modal-content">
                                                <div class="modal-body d-md-flex p-0">
                                                    <div class="col-lg-8 col-md-7">
                                                        <img src='<?php echo "../admin_area/sm_img/$post_img"?>' class="w-100 model-img">
                                                    </div>
                                                    <div class="col-lg-4 col-md-5 d-flex flex-column">
                                                        <div class="px-2 border-bottom">
                                                            <div class="d-flex align-items-center py-2">
                                                                <div><img src='../assets/img/profiles/<?php echo "$user_img";?>' height="50" width="50" class="rounded-circle"></div>
                                                                <div>&nbsp;&nbsp;&nbsp;</div>
                                                                <div>
                                                                    <h6 class="m-0"><?php echo "$user_name";?></h6>
                                                                </div>
                                                            </div>
                                                            <p class="px-5"><?php echo "$post_text";?></p>
                                                        </div>
                                                        <div class="flex-fill align-self-stretch overflow-auto" id="comment-section<?php echo $id; ?>" style="height:20vh;">   
                                                            <?php
                                                                $select_query1="SELECT * from comments where post_id=$id";
                                                                $result_select1=mysqli_query($con,$select_query1);
                                                                while($comment=mysqli_fetch_assoc($result_select1)){
                                                                    
                                                                    $select_query2="SELECT * from users where user_id=$comment[user_id]";
                                                                    $result_select2=mysqli_query($con,$select_query2);
                                                                    $user=mysqli_fetch_assoc($result_select2);
                                                            ?>
                                                            <div class="d-flex align-items-center p-2">
                                                                <div><img src="../assets/img/profiles/<?php echo $user['profile_pic'] ?>" height="30" width="30" class="rounded-circle border-bottom"></div>
                                                                <div class="d-flex px-2 flex-column justify-content-start align-items-start">
                                                                    <h6 class="m-0">@<?php echo $user['username'] ?></h6>
                                                                    <p class="text-muted"><?php echo $comment['comment'];?></p>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>

                                                        <div class="d-flex justify-content-between border-top" style="font-size: 25px;">
                                                            <span>
                                                                <?php 
                                                                if(checkLikeStatus($current_user,$id)){
                                                                    $like_btn_display='none';
                                                                    $unlike_btn_display='';
                                                                }
                                                                else{
                                                                    $unlike_btn_display='none';
                                                                    $like_btn_display='';
                                                                }
                                                                ?>
                                                                <i class="px-4 bi bi-heart-fill unlike-btn" style="display:<?php echo $unlike_btn_display;?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' data-like="like<?php echo $id; ?>"></i>
                                                                <i class="px-4 bi bi-heart like-btn" style="display:<?php echo $like_btn_display;?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' data-like="like<?php echo $id; ?>"></i>
                                                            </span>
                                                            
                                                            <i class="px-4 bi bi-chat"></i>
                                                        </div>
                                                        <div class="d-flex justify-content-between" style="font-size: 16px;">
                                                            <span class="px-4 text-muted" id="like<?php echo $id; ?>" ><?php echo likecount($id);echo ' likes';?></span>
                                                            <span class="px-4 text-muted" id="comment<?php echo $id; ?>"><?php echo commentcount($id);echo ' comments';?></span>
                                                        </div>
                                                        <div class="input-group p-2 border-top">
                                                            <input type="text" name="" class="form-control rounded-0 border-0 comment-input" placeholder="Add a comment" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                            <button class="btn btn-outline-primary rounded-1 border-0 add-comment" type="button" data-comment-id="comment<?php echo $id;?>" data-cs="comment-section<?php echo $id; ?>" data-user-id='<?php echo $current_user;?>' data-post-id='<?php echo $id?>' id="button-addon2">Post</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>

                            </div>

                    <?php
                        }
                    }
                    
                }
                ?>  
                
                </div>
            </div>
        </div>   
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<script>
    $(".sidebar ul li").on('click',function(){
        $(".sidebar ul li.active").removeClass('active');
        $(this).addClass('active');
    })
    $('.open-btn').on('click',function(){
        $('.sidebar').addClass('active');
    })
    $('.close-btn').on('click',function(){
        $('.sidebar').removeClass('active');
    })

    // like button 

    $(".like-btn").on('click',function(){
        var user_id_v=$(this).data('userId');
        var post_id_v=$(this).data('postId');
        var like=$(this).data('like');
        var button=this;
        $(button).attr('disabled',true);
        if(user_id_v==0){
            window.location.href='../login-page.php';
        }
        $.ajax({
            url:'../includes/ajax.php?like',
            method:'post',
            dataType:'json',
            data:{user_id:user_id_v,post_id:post_id_v},
            success:function(response){
                if(response.status){
                    $(button).hide();
                    $(button).siblings().show();
                    $(button).attr('disabled',false);
                    $("#"+like).replaceWith(response.like);
                    button=null;
                }
                else{
                    console.log('something wrong');
                    $(button).attr('disabled',false);
                }
            }
        });
    })

    // unlike button
    
    $(".unlike-btn").on('click',function(){
        var user_id_v=$(this).data('userId');
        var post_id_v=$(this).data('postId');
        var like=$(this).data('like');
        var button=this;
        $(button).attr('disabled',true);
        if(user_id_v==0){
            window.location.href='../login-page.php';
        }
        $.ajax({
            url:'../includes/ajax.php?unlike',
            method:'post',
            dataType:'json',
            data:{user_id:user_id_v,post_id:post_id_v},
            success:function(response){
                if(response.status){
                    $(button).hide();
                    $(button).siblings().show();
                    $(button).attr('disabled',false);
                    $("#"+like).replaceWith(response.like);
                    button=null;
                }
                else{
                    console.log('something wrong');
                }
            }
        });
    })
    
    // for adding comment

    $(".add-comment").on('click',function(){
        var comment_v= $(this).siblings('.comment-input').val();
        if(comment_v==''){
            return 0;
        }
        var user_id_v=$(this).data('userId');
        var post_id_v=$(this).data('postId');
        var cs=$(this).data('cs');
        var comment_count=$(this).data('commentId');
        var button=this;
        $(button).attr('disabled',true);
        $(button).siblings('.comment-input').attr('disabled',true);
        if(user_id_v==0){
            window.location.href='../login-page.php';
        }
        $.ajax({
            url:'../includes/ajax.php?addcomment',
            method:'post',
            dataType:'json',
            data:{user_id:user_id_v,post_id:post_id_v,comment:comment_v},
            success:function(response){
                console.log(response);
                if(response.status){
                    $("#"+cs).append(response.comment);
                    $(button).attr('disabled',false);
                    $(button).siblings('.comment-input').attr('disabled',false);
                    $("#"+comment_count).replaceWith(response.commentCount);
                }
                else{
                    console.log('something wrong');
                }
            }
        });
    })
</script>
</html>