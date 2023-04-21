<?php
    include "../includes/connect.php";
    if(isset($_POST['new-mem'])){
        $name=$_POST['name'];
        $position=$_POST['position'];
        $email=$_POST['email'];
        $insta=$_POST['insta'];
        $linked=$_POST['linked'];
        $mem_img=$_FILES['mem_img']['name'];
        $temp_image=$_FILES['mem_img']['tmp_name'];
        $insert_query="insert into newteam(m_name,m_position,m_email,insta,linked,mem_img) values('$name','$position','$email','$insta','$linked','$mem_img')";
        $result_insert=mysqli_query($con,$insert_query);
        if($result_insert){
            move_uploaded_file($temp_image,"../assets/img/imgTeam/$mem_img");
            echo "<script>alert('inserted successfully')</script>";
        }
    }
?>
 <hr class="mt-3" style="width:90%">
 <div class="add mt-3 m-5 mb-2">  
        <h4 class="text-primary text-center">Add new core</h4>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input-group mb-2 m-auto">
                <input type="text" name="name" placeholder="enter name" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-2 m-auto">
                <input type="text" name="position" placeholder="enter position" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-2 m-auto">
                <input type="email" name="email" placeholder="enter email" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-2 m-auto">
                <input type="text" name="insta" placeholder="enter instagram link" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-2 m-auto">
                <input type="text" name="linked" placeholder="enter linkedin link" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="form-outline mb-4 m-auto">
                <label for="post_img" class="for-label">core member image</label>
                <input type="file" name="mem_img" class="form-control" autocomplete='off' required>
            </div>
            <div class="form-outline mb-4 m-auto">
                <input type="Submit" name="new-mem" value="upload" class="form-control bg-primary text-white" style="width:180px" required>
            </div>
        </form>
    </div>
    <hr class="mt-3" style="width:90%">