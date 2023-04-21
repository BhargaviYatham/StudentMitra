<div class="row updates" id="update">
    <div class="m-1">
        <a href="index.php?oldteam=team" class="btn btn-primary px-4 py-4 m-2">Add oldteam</a>
    </div>
    <?php
        if(isset($_GET['oldteam'])){
            $team=$_GET['oldteam'];
            if($team=='team'){
                include('old_team.php');
            }
        }
    ?>
    <table class="table table-striped table-hover mb-3 ">
        <thead >
            <tr>
                <th><input type="checkbox" id="selectAll">
                    <label for="selectAll"></label>
                </th>
                <th>S.NO</th>
                <th>Name</th>
                <th>Images</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <?php
            global $con;
            $select_query='select * from oldteam';
            $result_select=mysqli_query($con,$select_query);
            if($result_select){
                $num=0;
                while($row=mysqli_fetch_assoc($result_select)){
                    $id=$row['team_id'];
                    $title=$row['team_title'];
                    $img=$row['team_img'];
        ?>
        <tbody>
            <th></th>
            <th><?php echo ++$num ?></th>
            <th><?php echo $title ?></th>
            <th><img src="../assets/img/imgTeam/<?php echo $img ?>" alt="" srcset="" height="50" width="50"></th>
            <th><a href="index.php?edit"><i class="bi bi-pencil-square"></i></a></th>
            <th><a href="index.php?oldteam=<?php echo $id?>"><i class="bi bi-trash3-fill text-danger"></i></a></th>
        </tbody>
        <?php
        if(isset($_GET['oldteam'])){
            $delete_id=$_GET['oldteam'];
            if($delete_id==$id){
                $delete_query="Delete from oldteam where team_id=$delete_id";
                $result_delete=mysqli_query($con,$delete_query);
            }
        } 
     } }?>
    </table>  
</div>