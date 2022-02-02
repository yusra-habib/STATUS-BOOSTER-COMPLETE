<?php 
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<div class="body-content">
<div class="module">
<?php
//if(isset($_POST['edit_data'])){
    $id=$_GET['edit_id'];
    $postQuery="SELECT * FROM imageusa WHERE idImage='$id'";
    $runPQ=mysqli_query($conn,$postQuery);
    foreach($runPQ as $row){
        ?>
  <h1> UPLOAD IMAGE</h1>
  <form class="form" action="gallery_update.php" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="alert alert-error"></div>
    <input type="hidden" name="edit_id" value="<?php echo $row['idImage']?>">
    <input type="text"  name="edit_filetitle" value="<?php echo $row['titleImage']?>" placeholder="TITLE" />
    <div class="avatar"><label>File upload </label><input type="file" name="edit_file"/></div>
    <input type="hidden" name="pre_file" value="<?php echo $row['imgFullNameImage']?>">
    <img src="<?php echo"img/".$row['imgFullNameImage']?>" width="100px">
    <input type="submit" value="Update" name="update_btn" class="btn btn-block btn-primary" />
    <input type="submit" value="Cancel"  class="btn btn-block btn-primary" />
  </form>
</div>
</div>
<?php



    
}

?>
