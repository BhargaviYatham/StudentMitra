<?php

$con=mysqli_connect('localhost','root','','sm');
if(!$con){
    die(mysqli_error($con));
}
function checkLikeStatus($user_id,$post_id){
    global $con;
    $select_query="SELECT * From likes where user_id=$user_id && post_id=$post_id";
    $result_select=mysqli_query($con,$select_query);
    if(mysqli_num_rows($result_select)>0){
        return true;
    }
    else{
        return false;
    }
}

if(isset($_GET['like'])){
    $post_id=$_POST['post_id'];
    $user_id=$_POST['user_id'];
    if(!checkLikeStatus($user_id,$post_id)){
        $insert_query="INSERT into likes(post_id,user_id) values('$post_id','$user_id')";
        $result=mysqli_query($con,$insert_query);
        if($result){
            $select_query="SELECT * From likes where post_id=$post_id";
            $result_select=mysqli_query($con,$select_query);
            $count=mysqli_num_rows($result_select);
            $response['status']=true;
            $response['like']='<span class="px-4 text-muted" id="like'.$post_id.'" >'.$count.' likes</span>';
        }
        else{
            $response['status']=false;
        }

        echo json_encode($response);
    }
        
    
    
}
// unlike function
if(isset($_GET['unlike'])){
    $post_id=$_POST['post_id'];
    $user_id=$_POST['user_id'];
    
    if(!empty($user_id)){
        if(checkLikeStatus($user_id,$post_id)){
            $delete_query="DELETE FROM likes WHERE user_id=$user_id && post_id=$post_id";
            $result=mysqli_query($con,$delete_query); 
            if($result){
                $select_query="SELECT * From likes where post_id=$post_id";
                $result_select=mysqli_query($con,$select_query);
                $count=mysqli_num_rows($result_select);
                $response['status']=true;
                $response['like']='<span class="px-4 text-muted" id="like'.$post_id.'" >'.$count.' likes</span>';
            }
            else{
                $response['status']=false;
            }
            echo json_encode($response);
        }
    }
    
}

// comment function
function addcomment($post_id,$user_id,$comment){
    global $con;
    $comment=mysqli_real_escape_string($con,$comment);
    $insert_query="INSERT INTO comments(post_id,user_id,comment) VALUES('$post_id','$user_id','$comment')";
    $result_insert=mysqli_query($con,$insert_query);
    return $result_insert;
}
if(isset($_GET['addcomment'])){
    $post_id=$_POST['post_id'];
    $user_id=$_POST['user_id'];
    $comment=$_POST['comment'];
    if(addcomment($post_id,$user_id,$comment)){
        if(true){
            $select_query2="SELECT * from users where user_id=$user_id limit 1";
            $result_select2=mysqli_query($con,$select_query2);
            $user=mysqli_fetch_assoc($result_select2);
            $response['status']=true;
            $response['comment']='<div class="d-flex align-items-center p-2">
            <div><img src="../assets/img/profiles/'.$user['profile_pic'].'" height="30" width="30" class="rounded-circle border-bottom"></div>
            <div class="d-flex px-2 flex-column justify-content-start align-items-start">
                <h6 class="m-0">'.$user['username'].'</h6>
                    <p class="text-muted">'.$_POST['comment'].'</p>
                </div>
            </div>';
            $select_query="SELECT * From comments where post_id=$post_id";
            $result_select=mysqli_query($con,$select_query);
            $count=mysqli_num_rows($result_select);
            $response['commentCount']='<span class="px-4 text-muted" id="comment'.$post_id.'" >'.$count.' comments</span>';
         
        }
        else{
            $response['status']=false;
        }
        echo json_encode($response);
    }
    
    
}

?>