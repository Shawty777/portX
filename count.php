<?php
        
        include 'CONFIG.php';
        $count=0;
        $connt2=0;
        $query="SELECT * FROM `ordertbl` WHERE `Status`='placed'";
        $query_run = mysqli_query($conn,$query);
        $check_data = mysqli_num_rows($query_run) > 0;
        if ($check_data) {
          $count=0;
        while ($row = mysqli_fetch_array($query_run)) {
          
          $count=$count+1;}}

?>