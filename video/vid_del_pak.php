<?php
//if(isset($_POST['del_data'])){
    include_once"db.php";
    $id=$_GET['del_id'];
   

    
    $query="DELETE FROM videopak WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run){
        
        echo "<script> alert('Do YOU REALLY WANT TO DELETE')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url=http://localhost/seproject/STATUS%20BOOSTER/single_page_web/video/videos_aus.php">
        <?php
        

    }
    else{
        echo "<script> alert('SOMETHING WENT WRONG')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url=http://localhost/seproject/STATUS%20BOOSTER/single_page_web/video/videos_aus.php">
        <?php

    }

?>