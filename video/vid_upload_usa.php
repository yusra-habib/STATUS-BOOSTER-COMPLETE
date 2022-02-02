<?php
session_start();
if(isset($_POST['submit'])){
    include_once"db.php";
    $videolink=$_POST['filelink'];
    $videoTitle=$_POST['filetitle'];
    $sql="SELECT * FROM videousa;";
    $stmt=mysqli_stmt_init($conn);
    $result=mysqli_query($conn,"select * from videousa where link='$videolink' && title=' $videoTitle'");
    $result1=mysqli_query($conn,"INSERT videousa SET title='$videoTitle',link='$videolink'")  or die("failed to query database" . mysqli_error($conn));
    header("Location:videos_usa.php?upload=success");
}else{
    echo"you need to upload a proper file type";
}