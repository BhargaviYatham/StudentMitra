<?php
    include "../includes/connect.php";
    if(isset($_POST['event'])){
        $event_title=$_POST['event_title'];
        $event_date=$_POST['event_date'];
        $event_description=$_POST['event_description'];
        $event_img=$_FILES['event_img']['name'];

        $temp_image=$_FILES['event_img']['tmp_name'];
        $insert_query="insert into events(event_title,event_date,event_description,event_img) values('$event_title','$event_date','$event_description','$event_img')";
        $result_insert=mysqli_query($con,$insert_query);
        if($result_insert){
            move_uploaded_file($temp_image,"./sm_img/$event_img");
            echo "<script>alert('inserted successfully')</script>";
        }
    }
?>
     <hr class="mt-3" style="width:90%">
     <div class="add mt-3 m-5">  
     <h4 class="text-primary text-center">Add Events</h4>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input-group mb-2 m-auto">
                <span class="input-group-text bg-primary text-white" id="basic-addon1">@</span>
                <input type="text" name="event_title" placeholder="Enter Event Title" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-2 m-auto">
                <span class="input-group-text bg-primary text-white" id="basic-addon1">@</span>
                <input type="text" name="event_date" placeholder="date month" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-2 m-auto">
                <textarea name="event_description" class='form-control'></textarea>
            </div>
            <div class="form-outline mb-4 m-auto">
                <label for="update_img" class="for-label">event image</label>
                <input type="file" name="event_img" class="form-control" autocomplete='off' required>
            </div>
            <div class="form-outline mb-4x m-auto">
                <input type="Submit" name="event" value="Submit" class="form-control bg-primary text-white"  style="width:180px" required>
            </div>
        </form>
    </div>
    
<hr class="mt-3" style="width:90%">
