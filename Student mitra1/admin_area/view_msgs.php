<div class="row">
    
    <table class="table table-striped table-hover mb-3 ">
        <thead >
            <tr>
                <th><input type="checkbox" id="selectAll">
                    <label for="selectAll"></label>
                </th>
                <th>S.NO</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Body</th>
                <th>Delete</th>
            </tr>
        </thead>
        <?php
            global $con;
            $select_query='select * from contact';
            $result_select=mysqli_query($con,$select_query);
            if($result_select){
                $num=0;
                while($row=mysqli_fetch_assoc($result_select)){
                    $id=$row['id'];
                    $name=$row['name'];
                    $email=$row['email'];
                    $subject=$row['subject'];
                    $body=$row['body'];
        ?>
        <tbody>
            <td></td>
            <td><?php echo ++$num ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $subject ?></td>
            <td><?php echo $body ?></td>
            <td><a href="index.php?msgs=<?php echo $id?>"><i class="bi bi-trash3-fill text-danger"></i></a></td>
        </tbody>
        <?php
            if(isset($_GET['msgs'])){
                $delete_id=$_GET['msgs'];
                if($delete_id==$id){
                    $delete_query="Delete from contact where id=$delete_id";
                    $result_delete=mysqli_query($con,$delete_query);
                }
            } 
       } }?>
    </table>      
</div>