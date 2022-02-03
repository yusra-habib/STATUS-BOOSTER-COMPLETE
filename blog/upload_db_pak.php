<?php
session_start();
if(isset($_POST['submit'])){
    include_once"db.php";

    $imageTitle=$_POST['filetitle'];
    $imagelink=$_POST['filelink'];
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
        $fileDestiantion="blog/".$fileName;
        $sql="SELECT * FROM blogusa;";
        $stmt=mysqli_stmt_init($conn);
        $result1=mysqli_query($conn,"INSERT INTO blogpak (blogtitle,bloglink,imageusa) VALUES ('$imageTitle','$imagelink','$fileName')")  or die("failed to query database" . mysqli_error($conn));
        move_uploaded_file($fileTempName,$fileDestiantion);
        header("Location:dis_art_pak.php?upload=editsuccess");
        
    }else{
        $_SESSION['status']="upload a proper file type";
        header("Location:upload_art_pak.php?");
    }
}else{
    $_SESSION['status']="Something went wrong";
    header("Location:upload_art_pak.php?");
}

