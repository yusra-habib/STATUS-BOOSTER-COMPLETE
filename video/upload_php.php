<?php
include_once"db.php";
if(isset($_POST['submit'])){
    $videolink=$_POST['videolink'];
    $videoTitle=$_POST['videotitle'];
    $sql="SELECT * FROM videos;";
    $stmt=mysqli_stmt_init($conn);
    $result=mysqli_query($conn,"select * from videos where videolink='$videolink' && videotitle=' $videoTitle'");
    $result1=mysqli_query($conn,"INSERT INTO videos(videoLink,titlevideo) VALUES ('$videolink',' $videoTitle')")  or die("failed to query database" . mysqli_error($conn));
    header("Location:upload.php?upload=success");
}else{
    echo"you need to upload a proper file type";
}