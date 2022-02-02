<?php
if(isset($_POST['update_btn'])){
    session_start();
    include_once"db.php";
    $id=$_POST['edit_id'];
    $old_file=$_POST['pre_file'];
    $edit_title=$_POST['edit_filetitle'];
    $edit_link=$_POST['edit_filelink'];
    $file=$_FILES['edit_file'];
    
    
    $fileName=$file["name"];
    $fileType=$file["type"];
    $fileTempName=$file["tmp_name"];
    $fileError=$file["error"];
    $fileSize=$file["size"];
    if($fileName!=''){
        $update_filename=$fileName;
        $fileExt= explode(".",$fileName);
        $fileActualExt=strtolower(end($fileExt));
        $allowed=array("jpg","jpeg","png");
        if(in_array($fileActualExt,$allowed)){
            $fileDestiantion="blog/".$fileName;
            $sql="SELECT * FROM blogcom;";
            $stmt=mysqli_stmt_init($conn);
            $fileDestiantion="blog/".$fileName;
            $result1=mysqli_query($conn,"UPDATE blogcom SET blogtitle='$edit_title', bloglink='$edit_link', imageusa='$update_filename' WHERE idblog='$id'")  or die("failed to query database" . mysqli_error($conn));
            move_uploaded_file($fileTempName,$fileDestiantion);
            header("Location:dis_art_com.php?upload=editsuccess");
        }else{
            $_SESSION['status']="Please upload correct file";
            header('location:art_update_com.php');
        }
    }else{
        $update_filename=$old_file;
        $result1=mysqli_query($conn,"UPDATE blogcom SET blogtitle='$edit_title', bloglink='$edit_link', imageusa='$update_filename' WHERE idblog='$id'")  or die("failed to query database" . mysqli_error($conn));
        move_uploaded_file($fileTempName,$fileDestiantion);
        header("Location:dis_art_com.php?upload=editsuccess");
    }
    
}else{
    $_SESSION['status']="Something went wrong";
    header('location:art_update_com.php');
}
