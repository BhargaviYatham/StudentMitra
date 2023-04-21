<div class="row updates" id="update">
    <div class="m-1">
        <a href="index.php?posts=post" class="btn btn-primary px-4 py-4 m-2">Add Posts</a>
    </div>
    <?php
        if(isset($_GET['posts'])){
            $post=$_GET['posts'];
            if($post=='post'){
                include('posts.php');
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
            $select_query='select * from posts';
            $result_select=mysqli_query($con,$select_query);
            if($result_select){
                $num=0;
                while($row=mysqli_fetch_assoc($result_select)){
                    $id=$row['post_id'];
                    $text=$row['post_text'];
                    $img=$row['post_img'];
        ?>
        <tbody>
            <th></th>
            <th><?php echo ++$num ?></th>
            <th><?php echo $text ?></th>
            <th><img src="./sm_img/<?php echo $img ?>" alt="" srcset="" height="50" width="50"></th>
            <th><a href="index.php?edit"><i class="bi bi-pencil-square"></i></a></th>
            <th><a href="index.php?posts=<?php echo $id?>"><i class="bi bi-trash3-fill text-danger"></i></a></th>
        </tbody>
        <?php
            if(isset($_GET['posts'])){
                $delete_id=$_GET['posts'];
                if($delete_id==$id){
                    $delete_query="Delete from posts where post_id=$delete_id";
                    $result_delete=mysqli_query($con,$delete_query);
                }
            } 
       } }?>
    </table>
         
</div>