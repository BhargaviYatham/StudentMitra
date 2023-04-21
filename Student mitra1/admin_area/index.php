<?php
    include "../includes/connect.php";
    include 'functions/functions.php';
    if(isset($_SESSION['auth'])){
        if($_SESSION['user']['usertype']!="admin"){
            logout();
            header('Location:../login-page.php');
        }
    }
    else{
        logout();
        header('Location:../login-page.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page | StudentMitra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">        
    <style>
        body{
            /* overflow-x: hidden; */
            min-height: 100vh;
        }
        #side_nav{
            height:100vh;
            /* min-width: 250px;
            max-width:250px; */
            transition: all 0.3s;
            /* margin-top: 80px; */
            top: 0;
            left: 0;
            background: rgba(103, 176, 209, 0.8);
        }
        .head i{
            font-size:20px;
            font-weight: 400;
            
        }
        .sidebar li a{
            color: #000;
            font-size:large;
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
            color: #000;
        }
        .sidebar ul li img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .sidebar ul li span{
            font-size: medium;
        }
        .gallery{
            width:calc(100% - 250px);
            position: relative;
            top:6pc;
            left: 10pc;
        }
        .gallery .col-4{
            height:100px;
        }
        .content .navbar{
                z-index: 1;
        }
        .gallery .table{
                width: 90%;
        }
        .gallery .add{
            left:0;
            position: relative;
            width:75%;
        }
        .dashboard .btn{
            height:150px;
            width:150px;
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
                left: 10px;
            }
            .gallery .table{
                width: 100%;
            }
            .gallery .add{
                left:0;
                position: relative;
                width:90%;
            }
            
        }
        .modal-footer img{
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="sidebar fixed-top col-lg-2 col-md-3 col-6" id="side_nav">
            <div class="header-box p-1" style="background: rgb(20, 105, 144);">
                <a class="navbar-brand d-flex" href="#">
                    <img src="../assets/img/images/logo.png"  height="65" width="65" alt="logo">
                    <span class="text-warning pt-3 head">STUDENTMITRA</span>
                    <button class="btn d-md-none d-block close-btn px-4 text-warning "><i class="fal fa-stream"></i></button>
                </a>
                <!-- <h1 class="fs-4"><span class="bg-white text-dark shadow px-2 me-2">SM</span></h1> -->
                
            </div>
            <ul class="list-unstyled py-2">
                <li><a href="index.php?dashboard" class="text-decoration-none px-4 py-2 d-block">
                    <span class="px-3"><i class="bi bi-house"></i> Dashboard</span>
                </a></li>
                <li><a href="index.php?updates" class="text-decoration-none px-4 py-2 d-block">
                    
                    <span class="px-3">Updates</span>
                </a></li>
                <li><a href="index.php?events" class="text-decoration-none px-4 py-2 d-block">
                    
                    <span class="px-3">Events</span>
                </a></li>
                <li class="dropdown px-3">
                    <a href="index.php?#homesubmenu1" class="dropdown-toggle text-decoration-none px-4 py-2 d-block" data-bs-toggle="collapse" aria-expanded="flase">Team</a>
                    <ul class="collapse list-unstyled  menu" id="homesubmenu1">
                        <li><a href="index.php?newteam" class="text-decoration-none px-4 py-2 d-block">New Team</a></li>
                        <li><a href="index.php?oldteam" class="text-decoration-none px-4 py-2 d-block" >Old Team</a></li>
                    </ul>
                </li>
                </a></li>
                <li class="dropdown px-3">
                    <a href="index.php?#homesubmenu2" class="dropdown-toggle text-decoration-none px-4 py-2 d-block" data-bs-toggle="collapse" aria-expanded="flase">Posts</a>
                    <ul class="collapse list-unstyled  menu" id="homesubmenu2">
                        <li><a href="index.php?posts" class="text-decoration-none px-4 py-2 d-block">Post imgs</a></li>
                        <li><a href="index.php?comments" class="text-decoration-none px-4 py-2 d-block" >Comments</a></li>
                    </ul>
                </li>
                <li><a href="index.php?msgs" class="text-decoration-none px-4 py-2 d-block">
                    <span class="px-3">Messages</span>
                </a></li>
                <li><a href="index.php?users" class="text-decoration-none px-4 py-2 d-block">
                    <span class="px-3">Users</span>
                </a></li>
            </ul>
        </div>
        <div class="content col-*">
            <nav class="navbar navbar-expand-lg bg-white fixed-top" style="box-shadow: 0px 0px 5px rgb(215, 211, 211);">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex" href="#">
                        <img src="../assets/img/images/logo.png"  height="50" width="50" alt="logo">
                        <button class="btn open-btn text-warning d-md-none d-block"><i class="fal fa-stream"></i></button>
                    </a>
                    <div class="d-flex justify-content-end px-0" id="navbarSupportedContent">
                        <ul class="navbar-nav">
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
                                <li><a class="dropdown-item border-top bg-light py-2" href="../edit_profile.php">Edit profile<i class="bi bi-pencil"></i></a></li>
                                <li><a class="dropdown-item bg-light py-2 text-danger" href="index.php?logout">Logout<i class="bi bi-leftarrow"></i></a></li>
                            </ul>
                        </li>
                    <?php
                    }
                    else{
                        echo "<li class='nav-item'>
                        <a class='nav-link btn btn-warning' href='../login-page.php' style='color:black;width:100px;'>Login</a>
                        </li>";
                    }
                    
                    ?>
                    </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid gallery" >
                <?php
                    if(isset($_GET['logout'])){
                        logout();
                    }
                
                    elseif(isset($_GET['dashboard'])){
                        include('dashboard.php');
                    }

                    elseif(isset($_GET['updates'])){
                        include('view_updates.php');
                    }
               
                    elseif(isset($_GET['events'])){
                        include('view_event.php');
                    }
                
                    elseif(isset($_GET['newteam'])){
                        include('view_newteam.php');
                    }
                
                    elseif(isset($_GET['oldteam'])){
                        include('view_oldteam.php');
                    }
                
                    elseif(isset($_GET['posts'])){
                        include('view_posts.php');
                    }

                    elseif(isset($_GET['comments'])){
                        include('view_comments.php');
                    }

                    elseif(isset($_GET['msgs'])){
                        include('view_msgs.php');
                    }
                
                    elseif(isset($_GET['users'])){
                        include('view_users.php');
                    }
                    else{
                        include('dashboard.php');
                    }
                ?>
                
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
    
</script>
</html>