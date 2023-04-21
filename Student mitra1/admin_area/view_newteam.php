
<div class="row events" id="event">
    <div class="m-1">
        <a href="index.php?newteam=team" class="btn btn-primary px-4 py-4 m-2">Add New Member</a>
    </div>
    <?php
        if(isset($_GET['newteam'])){
            $team=$_GET['newteam'];
            if($team=='team'){
                include('newteam.php');
            }
        }
    ?>
    <?php
        if(isset($_POST['save'])){
            update_team();   
        }
    ?>
    <table class="table table-striped table-hover mb-3 ">
        <thead >
            <tr>
                
                <th>S.NO</th>
                <th>Name</th>
                <th>position</th>
                <th>Email</th>
                <th>Insta</th>
                <th>Linked</th>
                <th>images</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <?php
            global $con;
            $select_query='select * from newteam';
            $result_select=mysqli_query($con,$select_query);
            if($result_select){
                $num=0;
                while($row=mysqli_fetch_assoc($result_select)){
                    $name=$row['m_name'];
                    $position=$row['m_position'];
                    $email=$row['m_email'];
                    $insta=$row['insta'];
                    $linked=$row['linked'];
                    $id=$row['mem_id'];
                    $img=$row['mem_img'];
        ?>
        <tbody>
            <td><?php echo ++$num ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $position ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $insta ?></td>
            <td><?php echo $linked ?></td>
            <td><img src="../assets/img/imgTeam/<?php echo $img ?>" alt="" srcset="" height="50" width="50"></td>
            <th><a href="" data-bs-toggle="modal" data-bs-target="#edit<?php echo $id?>"><i class="bi bi-pencil-square"></i></a></th>
            <div class="modal fade" id="edit<?php echo $id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" name='id' value='<?php echo $id ?>' hidden>
                        <div class="input-group mb-2 m-auto">
                            <input type="text" name="name" value="<?php echo $name ?>" placeholder="enter name" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-2 m-auto">
                            <input type="text" name="position" value="<?php echo $position ?>" placeholder="enter position" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-2 m-auto">
                            <input type="email" name="email" value="<?php echo $email ?>" placeholder="enter email" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-2 m-auto">
                            <input type="text" name="insta" value="<?php echo $insta ?>" placeholder="enter instagram link" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-2 m-auto">
                            <input type="text" name="linked" value="<?php echo $linked ?>" placeholder="enter linkedin link" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-outline mb-4 m-auto">
                            <label for="post_img" class="for-label">core member image</label>
                            <input type="file" name="mem_img" class="form-control" autocomplete='off'>
                        </div>
                        <div class="form-outline mb-4 m-auto">
                            <input type="Submit" name="save" value="Save" class="form-control bg-primary text-white" style="width:180px" required>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            <td><a href="index.php?newteam=<?php echo $id?>"><i class="bi bi-trash3-fill text-danger"></i></a></td>
        </tbody>
        <?php
        if(isset($_GET['newteam'])){
            $delete_id=$_GET['newteam'];
            if($delete_id==$id){
                $delete_query="Delete from newteam where mem_id=$delete_id";
                $result_delete=mysqli_query($con,$delete_query);
            }
        } 
     } }?>
    </table> 
</div>  