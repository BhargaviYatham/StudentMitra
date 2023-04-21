<div class="row events" id="event">
    <div class="m-1">
        <a href="" class="btn btn-primary px-4 py-4 m-2">Manage Events</a>
        <a href="index.php?events=event" class="btn btn-primary px-4 py-4 m-2">Add Events</a>
    </div>
    <?php
        if(isset($_GET['events'])){
            $event=$_GET['events'];
            if($event=='event'){
                include('event.php');
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
                <th>Date</th>
                <th>Description</th>
                <th>Images</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <?php
            global $con;
            $select_query='select * from events';
            $result_select=mysqli_query($con,$select_query);
            if($result_select){
                $num=0;
                while($row=mysqli_fetch_assoc($result_select)){
                    $id=$row['event_id'];
                    $title=$row['event_title'];
                    $date=$row['event_date'];
                    $description=$row['event_description'];
                    $img=$row['event_img'];
        ?>
        <tbody>
            <td></td>
            <td><?php echo ++$num ?></td>
            <td><?php echo $title ?></td>
            <td><?php echo $date ?></td>
            <td><?php echo $description ?></td>
            <td><img src="./sm_img/<?php echo $img ?>" alt="" srcset="" height="50" width="50"></td>
            <td><a href="index.php?edit"><i class="bi bi-pencil-square"></i></a></td>
            <td><a href="index.php?delete_event=<?php echo $id?>"><i class="bi bi-trash3-fill text-danger"></i></a></td>
        </tbody>
        <?php } }?>
    </table> 
</div>  