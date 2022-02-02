<?php
session_start();
if(isset($_POST['submit'])){
    include_once"db.php";

    $imageTitle=$_POST['filetitle'];
    $file=$_FILES['file'];
    
    $fileName=$file["name"];
    $fileType=$file["type"];
    $fileTempName=$file["tmp_name"];
    $fileError=$file["error"];
    $fileSize=$file["size"];
    $fileExt= explode(".",$fileName);
    $fileActualExt=strtolower(end($fileExt));
    $allowed=array("jpg","jpeg","png");
    if(in_array($fileActualExt,$allowed)){
        $fileDestiantion="img/".$fileName;
        $sql="SELECT * FROM image;";
        $stmt=mysqli_stmt_init($conn);
        $result1=mysqli_query($conn,"INSERT INTO imagepak (titleImage,imgFullNameImage) VALUES ('$imageTitle','$fileName')")  or die("failed to query database" . mysqli_error($conn));
        move_uploaded_file($fileTempName,$fileDestiantion);
        header("Location:blogs_pak.php?upload=editsuccess");
        
    }else{
        $_SESSION['status']="upload a proper file type";
        header("Location:upload.php?");
    }
}else{
    $_SESSION['status']="Something went wrong";
    header("Location:upload.php?");
}
