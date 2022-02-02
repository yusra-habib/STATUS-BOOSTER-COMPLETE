<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="material.css">
  <link rel="stylesheet" href="nav_bar.css">
  <title>Document</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="/single_page_web/index.html">
            <h1><span>S</span>tatus <span>B</span>ooster</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="/single_page_web/index.html" data-after="Home">Home</a></li>
            <li><a href="/single_page_web/videos.html" data-after="Projects">Videos</a></li>
            <li><a href="/single_page_web/blogs.html" data-after="Projects">Blogs</a></li>
            <li><a href="/single_page_web/quotes.html" data-after="Projects">Quotes</a></li>
            <li><a href="/single_page_web/country.html" data-after="Contact">Countries</a></li>
            <li><a href="/single_page_web/timer/index.html" data-after="Contact">Timer</a></li>
            <li><a href="/single_page_web/userview/user_admin/user_page.html" data-after="User">User</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
  <?php
    $postQuery="SELECT * FROM imageusa";
    $runPQ=mysqli_query($conn,$postQuery);
    while($post=mysqli_fetch_assoc($runPQ)){
      ?>
      <div class="main">
        <ul class="cards">
          <li class="cards_item">
            <div class="card">
              <div class="iframe-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/RwxC5J8LI4Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
                <div class="card_content">
                  <h2 class="card_title">TITLE</h2>
                  <p class="card_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
                  rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
                  harum? Ipsum repellat animi, fugit architecto voluptatum odit et!E</p>
                  <button class="btn card_btn">Read More</button>
                </div>
              </div>
          </li>
        </ul>
      </div>
</body>
</html>
if(isset($_POST['update_btn'])){
    session_start();
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
            $_SESSION['status']="Please upload correct file";
            header('location:blogs_pak.php');
        }
    }else{
        $update_filename=$old_file;
        $result1=mysqli_query($conn,"UPDATE imagepak SET titleImage='$edit_title',imgFullNameImage='$update_filename' WHERE idImage='$id'")  or die("failed to query database" . mysqli_error($conn));
        move_uploaded_file($fileTempName,$fileDestiantion);
        header("Location:blogs_pak.php?upload=editsuccess");
    }
    
}else{
    $_SESSION['status']="Something went wrong";
    header('location:blogs_pak.php');
}
