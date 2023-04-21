<div class="row dashboard">
    <div class="m-1">
        <a href="#" class="btn btn-primary px-5 py-5 m-3" style="border-radius:50%">users<br>
            <?php
                 $select_query="select * from users";
                 $result_select=mysqli_query($con,$select_query);
                 $num_rows=mysqli_num_rows($result_select);
                 echo $num_rows;
                 
            ?>
        </a>
        <a href="#" class="btn btn-primary px-5 py-5 m-3" style="border-radius:50%">Posts<br>
            <?php
                 $select_query="select * from posts";
                 $result_select=mysqli_query($con,$select_query);
                 $num_rows=mysqli_num_rows($result_select);
                 echo $num_rows;
                 
            ?>
        </a>
        <a href="#" class="btn btn-primary px-5 py-5 m-3" style="border-radius:50%">Events<br>
            <?php
                 $select_query="select * from events";
                 $result_select=mysqli_query($con,$select_query);
                 $num_rows=mysqli_num_rows($result_select);
                 echo $num_rows;
                 
            ?>
        </a>
        <a href="#" class="btn btn-primary px-5 py-5 m-3" style="border-radius:50%">updates<br>
            <?php
                 $select_query="select * from updates";
                 $result_select=mysqli_query($con,$select_query);
                 $num_rows=mysqli_num_rows($result_select);
                 echo $num_rows;
                 
            ?>
        </a>
        <a href="#" class="btn btn-primary px-5 py-5 m-3" style="border-radius:50%">Newteam<br>
            <?php
                 $select_query="select * from newteam";
                 $result_select=mysqli_query($con,$select_query);
                 $num_rows=mysqli_num_rows($result_select);
                 echo $num_rows;
                 
            ?>
        </a>
        <a href="#" class="btn btn-primary px-5 py-5 m-3" style="border-radius:50%">Oldteam<br>
            <?php
                 $select_query="select * from oldteam";
                 $result_select=mysqli_query($con,$select_query);
                 $num_rows=mysqli_num_rows($result_select);
                 echo $num_rows;
                 
            ?>
        </a>
        <a href="#" class="btn btn-primary px-5 py-5 m-3" style="border-radius:50%">Messages<br>
            <?php
                 $select_query="select * from contact";
                 $result_select=mysqli_query($con,$select_query);
                 $num_rows=mysqli_num_rows($result_select);
                 echo $num_rows;
            ?>
        </a>
    </div>
</div>