<?php 
require('db.php');
?>
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
    $postQuery="SELECT * FROM imagecom";
    $runPQ=mysqli_query($conn,$postQuery);
   
      ?>
      <div class="main">
        <ul class="cards">
          <?php
          while($post=mysqli_fetch_assoc($runPQ)){
          ?>
          <li class="cards_item">
            <div class="card">
              <img src="img/<?php echo $post['imgFullNameImage'];?>" >
              <div class="card_content">
                <h2 class="card_title"><?=$post['titleImage']?></h2>
                <button class="btn card_btn">Read More</button>
                <form action="gallery_edit_com.php" method="POST">
                  <input type="hidden" name="edit_id" value="<?php echo $post['idImage']?>">
                  <button type="submit" name="edit_data" class="btn card_btn">Edit</button>
                </form>
              </div>  
              
              
            </li>
            <?php
    }
    ?>
          </ul>
      </div>
     
</body>
</html>