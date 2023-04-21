<div class="row updates" id="update">
    
    <table class="table table-striped table-hover mb-3 ">
        <thead >
            <tr>
                <th><input type="checkbox" id="selectAll">
                    <label for="selectAll"></label>
                </th>
                <th>S.NO</th>
                <th>Name</th>
                <th>Email</th>
                <th>Usename</th>
                <th>User type</th>
                <th>Images</th>
                <th>Delete</th>
            </tr>
        </thead>
        <?php
            global $con;
            $select_query='select * from users';
            $result_select=mysqli_query($con,$select_query);
            if($result_select){
                $num=0;
                while($row=mysqli_fetch_assoc($result_select)){
                    $id=$row['user_id'];
                    $name=$row['full_name'];
                    $email=$row['email'];
                    $type=$row['usertype'];
                    $username=$row['username'];
                    $img=$row['profile_pic'];
        ?>
        <tbody>
            <td></td>
            <td><?php echo ++$num ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $username ?></td>
            <td><?php echo $type ?></td>
            <td><img src="../assets/img/profiles/<?php echo $img ?>" alt="" srcset="" height="50" width="50"></td>
            <td><a href="index.php?users=<?php echo $id?>"><i class="bi bi-trash3-fill text-danger"></i></a></td>
        </tbody>
        <?php } }?>
    </table>      
</div>