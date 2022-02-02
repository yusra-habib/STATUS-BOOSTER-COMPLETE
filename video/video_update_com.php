<?php
if(isset($_POST['update_btn'])){
    include_once"db.php";
    $id=$_POST['edit_id'];
    $videolink=$_POST['edit_filelink'];
    $videoTitle=$_POST['edit_filetitle'];
    $sql="SELECT * FROM videcom;";
    $stmt=mysqli_stmt_init($conn);
    $result=mysqli_query($conn,"select * from videocom where link='$videolink' && title=' $videoTitle'");
    $result1=mysqli_query($conn,"UPDATE videocom SET title='$videoTitle',link='$videolink' WHERE id='$id'")  or die("failed to query database" . mysqli_error($conn));
    header("Location:videos_com.php?upload=success");
}else{
    echo"you need to upload a proper file type";
}