<?php
//if(isset($_POST['delete_data'])){
    include_once"db.php";
    $id=$_GET['del_id'];
    $img=$_GET['del_img'];

    
   
    $query="DELETE FROM blogusa WHERE idblog='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run){
        unlink("blog/".$img);
        echo "<script> alert('DO YOU REALLY WANT TO DELETE')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url=http://localhost/seproject/STATUS%20BOOSTER/single_page_web/blog/dis_art_usa.php">
        <?php

    }
    else{
        echo "<script> alert('SOMETHING WENT WRONG')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url=http://localhost/seproject/STATUS%20BOOSTER/single_page_web/blog/dis_art_usa.php">
        <?php

    }

?>