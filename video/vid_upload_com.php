<?php
session_start();
if(isset($_POST['submit'])){
    include_once"db.php";
    $videolink=$_POST['filelink'];
    $videoTitle=$_POST['filetitle'];
    $sql="SELECT * FROM vide0com;";
    $stmt=mysqli_stmt_init($conn);
    $result=mysqli_query($conn,"select * from videocom where link='$videolink' && title=' $videoTitle'");
    $result1=mysqli_query($conn,"INSERT videocom SET title='$videoTitle',link='$videolink'")  or die("failed to query database" . mysqli_error($conn));
    header("Location:videos_com.php?upload=success");
}else{
    echo"you need to upload a proper file type";
}