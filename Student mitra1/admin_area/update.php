<?php
    include "../includes/connect.php";
    if(isset($_POST['update'])){
        $update_title=$_POST['update_title'];
        $update_img=$_FILES['update_img']['name'];

        $temp_image=$_FILES['update_img']['tmp_name'];
        $insert_query="insert into updates(update_title,update_img) values('$update_title','$update_img')";
        $result_insert=mysqli_query($con,$insert_query);
        if($result_insert){
            move_uploaded_file($temp_image,"./sm_img/$update_img");
            echo "<script>alert('inserted successfully')</script>";
        }
    }
?>
 <hr class="mt-3" style="width:90%">
    <div class="add mt-3 m-5">   
    <h4 class="text-primary text-center">Add updates</h4>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="input-group mb-2 m-auto">
            <span class="input-group-text bg-primary text-white" id="basic-addon1">@</span>
            <input type="text" name="update_title" placeholder="Insert update" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="form-outline mb-4 m-auto">
            <label for="update_img" class="for-labe mb-2">update image</label>
            <input type="file" name="update_img" class="form-control" autocomplete='off' required>
        </div>
        <div class="form-outline mb-4 m-auto">
            <input type="Submit" name="update" value="Submit" class="form-control bg-primary text-white" style="width:180px" required>
        </div>
    </form>
</div>
<hr class="mt-3" style="width:90%">