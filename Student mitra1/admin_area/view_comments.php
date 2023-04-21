<div class="row">
    
    <table class="table table-striped table-hover mb-3 ">
        <thead >
            <tr>
                <th><input type="checkbox" id="selectAll">
                    <label for="selectAll"></label>
                </th>
                <th>S.NO</th>
                <th>Post ID</th>
                <th>User ID</th>
                <th>Comments</th>
                <th>Delete</th>
            </tr>
        </thead>
        <?php
            global $con;
            $select_query='select * from comments';
            $result_select=mysqli_query($con,$select_query);
            if($result_select){
                $num=0;
                while($row=mysqli_fetch_assoc($result_select)){
                    $id=$row['id'];
                    $post_id=$row['post_id'];
                    $user_id=$row['user_id'];
                    $comment=$row['comment'];
        ?>
        <tbody>
            <td></td>
            <td><?php echo ++$num ?></td>
            <td><?php echo $post_id ?></td>
            <td><?php echo $user_id ?></td>
            <td><?php echo $comment ?></td>
            <td><a href="index.php?comments=<?php echo $id?>"><i class="bi bi-trash3-fill text-danger"></i></a></td>
        </tbody>
        <?php
            if(isset($_GET['comments'])){
                $delete_id=$_GET['comments'];
                if($delete_id==$id){
                    $delete_query="Delete from comments where id=$delete_id";
                    $result_delete=mysqli_query($con,$delete_query);
                }
            } 
       } }?>
    </table>      
</div>