<?php
    include "../includes/connect.php";
    if(isset($_POST['post'])){
        $email=$_POST['email'];
        $post_description=$_POST['post_description'];
        $post_type=$_POST['post_type'];
        $keywords=$_POST['keywords'];
        $post_img=$_FILES['post_img']['name'];
        $temp_image=$_FILES['post_img']['tmp_name'];
        $insert_query="insert into posts(username,post_img,post_text,post_type,keywords) values('$email','$post_img','$post_description','$post_type','$keywords')";
        $result_insert=mysqli_query($con,$insert_query);
        if($result_insert){
            move_uploaded_file($temp_image,"./sm_img/$post_img");
            echo "<script>alert('inserted successfully')</script>";
        }
    }
?>
<hr class="mt-3" style="width:90%">
 <div class="add mt-3 m-5 mb-2"> 
    <div class="container mt-3 p-3">
        <h4 class="text-primary text-center">Add Post</h4>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input-group mb-2 m-auto">
                <input type="email" name="email" placeholder="enter email" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-2 m-auto">
                <span class="input-group-text bg-primary text-light" id="basic-addon1">Post description</span>
                <textarea name="post_description" class='form-control'></textarea>
            </div>
            <div class="input-group mb-2 m-auto">
                <input type="text" name="post_type" placeholder="enter post type" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-2 m-auto">
                <input type="text" name="keywords" placeholder="enter keywords" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="form-outline mb-4 m-auto">
                <label for="post_img" class="for-label">Post image</label>
                <input type="file" name="post_img" class="form-control" autocomplete='off' required>
            </div>
            <div class="form-outline mb-4 m-auto">
                <input type="Submit" name="post" value="Submit" class="form-control bg-primary text-light" style="width:180px" required>
            </div>
        </form>
    </div>
<hr class="mt-3" style="width:90%">