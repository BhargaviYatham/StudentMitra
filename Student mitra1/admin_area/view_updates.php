<div class="row updates" id="update">
    <div class="m-1">
        <a href="" class="btn btn-primary px-4 py-4 m-2">Manage Updates</a>
        <a href="index.php?updates=update" class="btn btn-primary px-4 py-4 m-2">Add Updates</a>
    </div>
    <?php
        if(isset($_GET['updates'])){
            $update=$_GET['updates'];
            if($update=='update'){
                include('update.php');
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
            $select_query='select * from updates';
            $result_select=mysqli_query($con,$select_query);
            if($result_select){
                $num=0;
                while($row=mysqli_fetch_assoc($result_select)){
                    $id=$row['update_id'];
                    $title=$row['update_title'];
                    $img=$row['update_img'];
        ?>
        <tbody>
            <th></th>
            <th><?php echo ++$num ?></th>
            <th><?php echo $title ?></th>
            <th><img src="./sm_img/<?php echo $img ?>" alt="" srcset="" height="50" width="50"></th>
            <th><a href="index.php?edit"><i class="bi bi-pencil-square"></i></a></th>
            <th><a href="index.php?updates=<?php echo $id?>"><i class="bi bi-trash3-fill text-danger"></i></a></th>
        </tbody>
        <?php
            if(isset($_GET['updates'])){
                $delete_id=$_GET['updates'];
                if($delete_id==$id){
                    $delete_query="DELETE from updates where update_id=$delete_id";
                    $result_delete=mysqli_query($con,$delete_query);
                }
                
            } 
        ?>   
        <?php } }?>
    </table>  
     
</div>