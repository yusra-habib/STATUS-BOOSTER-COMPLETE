<?php
session_start();
if(isset($_POST['submit'])){
    include_once"db.php";
    $videolink=$_POST['filelink'];
    $videoTitle=$_POST['filetitle'];
    $sql="SELECT * FROM videoaus;";
    $stmt=mysqli_stmt_init($conn);
    $result=mysqli_query($conn,"select * from videoaus where link='$videolink' && title=' $videoTitle'");
    $result1=mysqli_query($conn,"INSERT videoaus SET title='$videoTitle',link='$videolink'")  or die("failed to query database" . mysqli_error($conn));
    header("Location:videos_aus.php?upload=success");
}else{
    echo"you need to upload a proper file type";
}