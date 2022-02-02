<?php
if(isset($_POST['update_btn'])){
    include_once"db.php";
    $id=$_POST['edit_id'];
    $old_file=$_POST['pre_file'];
    $edit_title=$_POST['edit_filetitle'];
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
            $fileDestiantion="img/".$fileName;
            $sql="SELECT * FROM image;";
            $stmt=mysqli_stmt_init($conn);
            $fileDestiantion="img/".$fileName;
            $result1=mysqli_query($conn,"UPDATE imagepak SET titleImage='$edit_title',imgFullNameImage='$update_filename' WHERE idImage='$id'")  or die("failed to query database" . mysqli_error($conn));
            move_uploaded_file($fileTempName,$fileDestiantion);
            header("Location:blogs_pak.php?upload=editsuccess");
        }else{
            echo"you need to upload a proper file type";
        }
    }else{
        $update_filename=$old_file;
        $result1=mysqli_query($conn,"UPDATE imagepak SET titleImage='$edit_title',imgFullNameImage='$update_filename' WHERE idImage='$id'")  or die("failed to query database" . mysqli_error($conn));
        move_uploaded_file($fileTempName,$fileDestiantion);
        header("Location:blogs_pak.php?upload=editsuccess");
    }
    
}else{
        echo"something went wrong";
}

                


