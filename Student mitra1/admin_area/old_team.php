<?php
    include "../includes/connect.php";
    if(isset($_POST['old-team'])){
        $team_title=$_POST['team_title'];
        $team_img=$_FILES['team_img']['name'];
        $temp_image=$_FILES['team_img']['tmp_name'];
        $insert_query="insert into oldteam(team_title,team_img) values('$team_title','$team_img')";
        $result_insert=mysqli_query($con,$insert_query);
        if($result_insert){
            move_uploaded_file($temp_image,"../assets/img/imgTeam/$team_img");
            echo "<script>alert('inserted successfully')</script>";
        }
    }
?>
<hr class="mt-3" style="width:90%">
 <div class="add mt-3 m-5 mb-2"> 
    <div class="container mt-3 p-3">
        <h4 class="text-primary text-center">Add old core</h4>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="input-group mb-2 m-auto">
                <span class="input-group-text bg-primary" id="basic-addon1">@</span>
                <input type="text" name="team_title" placeholder="enter batch name" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="form-outline mb-4 m-auto">
                <label for="post_img" class="for-label">team image</label>
                <input type="file" name="team_img" class="form-control" autocomplete='off' required>
            </div>
            <div class="form-outline mb-4 m-auto">
                <input type="Submit" name="old-team" value="upload" class="form-control bg-primary" style="width:180px" required>
            </div>
        </form>
    </div>
</section>