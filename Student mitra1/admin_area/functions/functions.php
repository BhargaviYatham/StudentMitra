<?php
    session_start();

    function add_post(){}
    function add_update(){
        global $con;
        $select_query='select * from updates';
        $result_select=mysqli_query($con,$select_query);
        if($result_select){
            while($row=mysqli_fetch_assoc($result_select)){
                $update_img=$row['update_img'];
                echo "<div class='carousel-item'>
                        <img src='admin_area/sm_img/$update_img' class='d-block w-100 img'>
                    </div>";
                }
        }
    }
    function add_event(){
        global $con;
        $select_query='select * from events';
        $result_select=mysqli_query($con,$select_query);
        if($result_select){
            while($row=mysqli_fetch_assoc($result_select)){
                $event_title=$row['event_title'];
                $event_date=$row['event_date'];
                $event_description=$row['event_description'];
                $event_img=$row['event_img'];
                echo "<div class='col-lg-4 col-md-6 col-*'>
                        <div class='card'>
                            <div class='date d-flex justify-content-center'>
                                <i style='font-weight:bold; color:white;'>$event_date</i>
                            </div>
                            <div class='e-details'>
                                <h4 class='d-flex justify-content-center'style='font-weight:800;'>$event_title</h4>
                                <p style='font-weight:600;'>$event_description</p>
                                <!-- <a href='' class='btn btn-warning d-flex justify-content-center'>explore</a> -->
                            </div>
                        </div>
                     </div>";
                }
        }
    }
    function contact(){
        global $con;
        if(isset($_POST['send'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $subject=$_POST['subject'];
            $body=$_POST['msg'];
            $insert_query="INSERT INTO contact(name,email,subject,body) VALUES('$name','$email','$subject','$body')";
            $result_insert=mysqli_query($con,$insert_query);
            if($result_insert){
                echo "<div class='alert alert-success'>Sent Successfully</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Sent Failed!</div>";
            }
        }
    }
    function isEmailRegistered($email){
        global $con;
        $select_query="select * from users where email='$email'";
        $result_select=mysqli_query($con,$select_query);
        $num_rows=mysqli_num_rows($result_select);
        if(isset($_SESSION['user'])){
            while($row=mysqli_fetch_assoc($result_select)){
                if($row['email']==$_SESSION['user']['email']){
                    return $num_rows-1;
                }
            }
        }
        return $num_rows;
    }
    function isUserRegistered($user){
        global $con;
        $select_query="select * from users where username='$user'";
        $result_select=mysqli_query($con,$select_query);
        $num_rows=mysqli_num_rows($result_select);
        if(isset($_SESSION['user'])){
            while($row=mysqli_fetch_assoc($result_select)){
                if($row['username']==$_SESSION['user']['username']){
                    return $num_rows-1;
                }
            }
        }
        return $num_rows;
    }
    function register(){
        global $con;
        if(isset($_POST['reg'])){
            $fullname=mysqli_real_escape_string($con,$_POST['fname']);
            $email=mysqli_real_escape_string($con,$_POST['email']);
            $username=mysqli_real_escape_string($con,$_POST['user']);
            $userpassword=$_POST['password'];
            $repassword=$_POST['repassword'];
            $verify_token=md5(rand());
            $password=md5($userpassword);
            $_SESSION['fname']=$fullname;
            $_SESSION['email']=$email;
            $_SESSION['username']=$username;
            $_SESSION['pass']=$repassword;
            $errors=array();
            if(empty($fullname) or empty($email) or empty($username) or empty($password)){
                array_push($errors,"All fields are required");
            }
            if(strlen($password)<5){
                array_push($errors,"password must be atleast 5 characters");
            }
            if($userpassword !== $repassword){
                array_push($errors,"password does not match");
            }
            if(isEmailRegistered($email)){
                array_push($errors,"email is already registerd");
            }
            if(isUserRegistered($username)){
                array_push($errors,"username is already exists");

            }
            if(count($errors)>0){
                foreach($errors as $error){
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }
            else{
                global $con;
                $insert_query="insert into users(full_name,email,username,password,verify_token) values('$fullname','$email','$username','$password','$verify_token')";
                $result_insert=mysqli_query($con,$insert_query);
                
                if($result_insert){
                    sendemail_verify("$fullname","$email","$verify_token");
                    echo "<div class='alert alert-scucess'> please verify your email to registers </div>";
                }
                else{
                    die("something went wrong");
                }    
            }
        }
    }
    function login(){
        global $con;
        if(isset($_POST['login'])){
            $username=$_POST['user'];
            $password=md5($_POST['password']);
            $select_query="select * from users where (email='$username' || username='$username')";
            $result_select=mysqli_query($con,$select_query);
            $user=mysqli_fetch_assoc($result_select);
            if($user && $user['verify_status']=='1'){
                if($password==$user['password']){   
                    $_SESSION['auth']='yes';
                    $_SESSION['user']=$user;
                    if(isset($_SESSION['user'])){
                        if($user['usertype']=="admin"){
                            header('Location:admin_area/index.php');
                        }
                        elseif($user['usertype']=="user"){
                            header('Location:index.php');
                        }
                       
                    }
                    else{
                        header('Location:login-page.php');
                    }
                }
                else{
                    echo "<div class='alert alert-warning'>password doesnot match</div>";
                }
            }
            else{
                echo "<div class='alert alert-warning'>Email doesnot exist or not verified</div>";   
            }
        }
    }
    function logout(){
        if(isset($_GET['logout'])){
            if(isset($_SESSION['auth'])){
                session_destroy();
                echo "<script>window.location.href='./login-page.php'</script>";
            }
            else{
                echo "<script>window.location.href='./login-page.php'</script>";
            }
        }
    }
    function update_profile(){
        global $con;
        if(isset($_POST['update_profile'])){
            $fullname=mysqli_real_escape_string($con,$_POST['full_name']);
            $email=mysqli_real_escape_string($con,$_POST['email']);
            $username=mysqli_real_escape_string($con,$_POST['username']);
            $profile_pic=$_FILES['profile_pic']['name'];

            $temp_image=$_FILES['profile_pic']['tmp_name'];
            $errors=array();

            if(empty($profile_pic)){
                $profile_pic=$_SESSION['user']['profile_pic'];
            }
            if(empty($fullname) or empty($email) or empty($username)){
                array_push($errors,"All fields are required");
            }
            if(isEmailRegistered($email)){
                array_push($errors,"email is already registerd");
            }
            if(isUserRegistered($username)){
                array_push($errors,"username is already exists");
            }
            if(count($errors)>0){
                foreach($errors as $error){
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }
            else{
                global $con;
                $user_id=$_SESSION['user']['user_id']; 
                $update_query="UPDATE users SET full_name='$fullname', email='$email' , username='$username' , profile_pic='$profile_pic' where user_id=$user_id";
                $result_update=mysqli_query($con,$update_query);
                if($result_update){
                    $select_query="select * from users where user_id=$user_id";
                    $result_select=mysqli_query($con,$select_query);
                    $user=mysqli_fetch_assoc($result_select);
                    $_SESSION['user']=$user;
                    move_uploaded_file($temp_image,"assets/img/profiles/$profile_pic");
                    echo "<div class='alert alert-success'>inserted successfully</div>";
                }
            }
        }
    }

    function update_team(){
        global $con;
        if(isset($_POST['save'])){
            global $con; 
            $id=$_POST['id'];
            $name=$_POST['name'];
            $position=$_POST['position'];
            $email=$_POST['email'];
            $insta=$_POST['insta'];
            $linked=$_POST['linked'];
            $img=$_FILES['mem_img']['name'];
            $temp_image=$_FILES['mem_img']['tmp_name'];
            if(empty($img)){
                $select_query="SELECT * FROM newteam WHERE mem_id=$id limit 1";
                $result_select=mysqli_query($con,$select_query);
                $row=mysqli_fetch_assoc($result_select);
                $img=$row['mem_img'];
            }
            $update_query="UPDATE newteam SET m_name='$name', m_email='$email' , m_position='$position' , insta='$insta',linked='$linked',mem_img='$img' where mem_id=$id";
            $result_update=mysqli_query($con,$update_query);
            if($result_update){
                move_uploaded_file($temp_image,"../assets/img/imgTeam/$img");
                echo "<div class='alert alert-success'>inserted successfully</div>";
            }
        }
    }


    function change_password(){
        global $con;
        if(isset($_POST['change'])){
            $email=mysqli_real_escape_string($con,$_POST['email']);
            $newpass=mysqli_real_escape_string($con,$_POST['password']);
            $confpass=mysqli_real_escape_string($con,$_POST['repassword']);
            $pass=md5($newpass);
            $token=mysqli_real_escape_string($con,$_POST['password_token']);

            if(!empty($token)){
                if(!empty($email) && !empty($newpass) && !empty($confpass)){
                    if($newpass==$confpass){
                        $select_query="SELECT * from users WHERE verify_token='$token'";
                        $result_select=mysqli_query($con,$select_query);
                        if(mysqli_num_rows($result_select)>0){
                            $update_query="UPDATE users SET password='$pass' WHERE verify_token='$token' LIMIT 1";
                            $result_update=mysqli_query($con,$update_query);
       
                            if($result_update){
                                echo "<div class='alert alert-success'>Password successfully changed</div>";                 
                            }
                            else{
                                echo "<div class='alert alert-warning'>something went wrong</div>";
                               
                            }
                        }
                        else{
                            echo "<div class='alert alert-warning'>Invalid Token</div>";
                            
                        }
                       
                    }
                    else{
                        echo "<div class='alert alert-warning'>password miss match</div>";
                        
                    }
                }
                else{
                    echo "<div class='alert alert-warning'>all fields are required</div>";
                    
                }

            }
            else{
                echo "<div class='alert alert-warning'>Token not Found</div>>";
                 
            }

        }
    }

    function checkLikeStatus($user_id,$post_id){
        global $con;
        if(!empty($user_id)){
            $select_query="SELECT * From likes where user_id=$user_id && post_id=$post_id";
            $result_select=mysqli_query($con,$select_query);
            if(mysqli_num_rows($result_select)>0){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

    function likecount($post_id){
        global $con;
        $select_query="SELECT * From likes where post_id=$post_id";
        $result_select=mysqli_query($con,$select_query);
        return mysqli_num_rows($result_select);
    }

    function commentcount($post_id){
        global $con;
        $select_query="SELECT * From comments where post_id=$post_id";
        $result_select=mysqli_query($con,$select_query);
        return mysqli_num_rows($result_select);
    }

?>