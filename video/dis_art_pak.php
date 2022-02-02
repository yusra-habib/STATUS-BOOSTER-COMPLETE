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
    $postQuery="SELECT * FROM blogpak";
    $runPQ=mysqli_query($conn,$postQuery);
    ?>
 
      <div class="main">
        <ul class="cards">
        <?php
        while ($row2=mysqli_fetch_assoc($runPQ)){
        echo "<li class='cards_item'>";
        echo "<div class='card'>";
        $img=$row2['imageusa'];
        $path='blog';
        $filepath = $path . DIRECTORY_SEPARATOR . $img;
        echo "<img style='width='300' height='100'' src='$filepath' alt=''>";
            echo "<div class='card_content'>";
              echo "<h2 class='card_title'>$row2[blogtitle]</h2> "; 
              echo"<a href='$row2[bloglink]'>";

              echo "<input type='button' value='CLICK ME' style='
              background: linear-gradient(to bottom left, #c22d5e 40%, #5e0d21 100%);
              color: white;
              WIDTH:50%;
              margin-left:25%;
              padding: 10px 24px; 
              cursor: pointer; 
              float: left; 
              '>";
              echo"</a>";

              // following <p> only used to make button lokk good 
              echo "<p style='color: transparent;'>extra spaceextra spaceextra spaceextra spaceextra spaceextra spaceextra spaceextra spaceextra space</p>";       
            echo "</div>";

            // changes for delete button
            echo"<a  href='pak_delete.php?del_id=$row2[idblog] & del_img=$row2[imageusa]'> <button style='              
            background: linear-gradient(to bottom left, #c22d5e 40%, #5e0d21 100%);
            margin-left:25%;
            color: white;
            padding: 10px 24px; 
            WIDTH:50%;

            cursor: pointer; 
            float: left; 
            ' type='submit'  name='delete_data' >DELETE</button></a>";

            // changes for update btn
            echo"<a href='pak_edit_form.php?edit_id=$row2[idblog]'> <button type='submit'  name='delete_data' style='              
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
      
</body>
</html>