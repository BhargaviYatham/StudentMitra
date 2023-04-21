<?php
    include 'admin_area/functions/functions.php';
    include "./includes/connect.php";
    if(isset($_GET['token'])){
        $token=$_GET['token'];
        $select_query="SELECT verify_token,verify_status FROM users WHERE verify_token='$token' LIMIT 1";
        $result_select=mysqli_query($con,$select_query);
        if(mysqli_num_rows($result_select)>0){
            $row=mysqli_fetch_assoc($result_select);
            if($row['verify_status']=='0'){
                $clicked_token=$row['verify_token'];
                $update_query="UPDATE users SET verify_status='1' WHERE verify_token='$clicked_token' limit 1";
                $result_update=mysqli_query($con,$update_query);
                if($result_update){
                    header('location:login-page.php');
                }
                else{
                    echo "<div class='alert alert-warning'>not verified</div>";
                }
            }
        }
    }
?>