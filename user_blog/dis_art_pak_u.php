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
<?php 
// include_once("connection.php");

$user_id=$_GET['user_id'];
$password=$_GET['password'];
?>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <?php echo "<a href='../user_after_login/index.php?user_id=$user_id & password=$password'>";?>
            <h1><span>S</span>tatus <span>B</span>ooster</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <?php echo "<li><a target='blank'  href='../user_after_login/index.php?user_id=$user_id & password=$password'  data-after='Home'>Home</a></li>
            <li><a target='blank'  href='../user_video/videos_com_u.php?user_id=$user_id & password=$password' target=' blank' data-after='Projects'>Videos</a></li>
            <li><a target='blank'  href='../user_blog/dis_art_com_u.php?user_id=$user_id & password=$password' target=' blank' data-after='Projects'>Blogs</a></li>
            <li><a target='blank'  href='../user_gallery/blogs_com_user.php?user_id=$user_id & password=$password' target=' blank' data-after='Projects'>Quotes</a></li>
            <li><a target='blank'  href='../user_after_login/country.php?user_id=$user_id & password=$password' target= 'blank' data-after='Contact'>Countries</a></li>
            <li><a target='blank'  href='../user_after_login/timer/index.php?user_id=$user_id & password=$password' target=' blank' data-after='Contact'>Timer</a></li><li><a target='blank'  href='http://localhost/seproject/STATUS%20BOOSTER/single_page_web/userview/view.php?user_id=$user_id & password=$password' target='blank' data-after='User'>User</a></li>";?>
            
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
              echo "<input type='button' value='CLICK ME'>";
              echo"</a>";

           
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