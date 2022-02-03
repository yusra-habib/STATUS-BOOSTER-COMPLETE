<?php 
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="material_old.css">
  <link rel="stylesheet" href="nav_bar.css">
  <title>Document</title>
</head>
<body>
   <!-- Header -->
 <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="http://127.0.0.1:5500/adminview/index.html">
            <h1><span>S</span>tatus <span>B</span>ooster</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="http://127.0.0.1:5500/adminview/index.html"  data-after="Home">Home</a></li>

            <li><a href="http://localhost/seproject/STATUS%20BOOSTER/single_page_web/video/videos_com.php" target=" blank" data-after="Projects">Videos</a></li>

            <li><a href="http://localhost/seproject/STATUS%20BOOSTER/single_page_web/blog/dis_art_com.php" target=" blank" data-after="Projects">Blogs</a></li>

            <li><a href="http://localhost/seproject/STATUS%20BOOSTER/single_page_web/gallery/blogs_com.php" target=" blank" data-after="Projects">Quotes</a></li>

            <li><a href="http://127.0.0.1:5500/adminview/country.html" target=" blank" data-after="Contact">Countries</a></li>

            <li><a href="http://127.0.0.1:5500/adminview/timer/index.html" target=" blank" data-after="Contact">Timer</a></li>

            <li><a href="http://127.0.0.1:5500/adminview/admin_dashboard.html"   data-after="User">User</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
  <?php
    $postQuery="SELECT * FROM imageusa";
    $runPQ=mysqli_query($conn,$postQuery);
      ?>
      <div class="main">
        <ul class="cards">
        <?php
      while ($row2=mysqli_fetch_assoc($runPQ)){
        echo "<li class='cards_item'>";
        echo "<div class='card'>";
        $img=$row2['imgFullNameImage'];
        $path='img';
        $filepath = $path . DIRECTORY_SEPARATOR . $img;
        echo "<img style='width='300' height='100'' src='$filepath' alt=''>";
            echo "<div class='card_content'>";
              echo "<h2 class='card_title'>$row2[titleImage]</h2> ";  

              // following <p> only used to make button lokk good 
               echo "<p style='color: transparent;'>extra spaceextra spaceextra spaceextra spaceextra spaceextra spaceextra spaceextra spaceextra space</p>";       
              
            echo "</div>";
            // changes for delete button
            echo"<a  href='gallery_delete.php?del_id=$row2[idImage] & del_img=$row2[imgFullNameImage]'> <button style='              
            background: linear-gradient(to bottom left, #c22d5e 40%, #5e0d21 100%);
            margin-left:25%;
            color: white;
            padding: 10px 24px; 
            WIDTH:50%;

            cursor: pointer; 
            float: left; 
            ' type='submit'  name='delete_data' >DELETE</button></a>";

            // changes for update btn
            echo"<a href='gallery_edit.php?edit_id=$row2[idImage]'> <button type='submit'  name='delete_data' style='              
            background: linear-gradient(to bottom left, #c22d5e 40%, #5e0d21 100%);
            margin-left:25%;
            WIDTH:50%;
            color: white;
            padding: 10px 24px; 
            cursor: pointer; 
            float: left; 
            '>UPDATE</button></a>";


            
        echo "</div>";
        echo "</li>";
          }
          ?>
    }
    ?>

          </ul>
      </div>
         

        echo "</div>";
        echo "</li>";
          }
          ?>

    
          </ul>
          <a href="./upload_three.php"><button class="block" style=" display: block;
  width: 100%;
  border: none;
  background: linear-gradient(to bottom left, #c22d5e 40%, #5e0d21 100%);
    
  color: white;
  padding: 34px 28px;
  margin-top:10%;
  font-size: 40px;
  cursor: pointer;
  text-align: center;">ADD MORE</button></a>
    </div>
    
      
</body>
</html>
