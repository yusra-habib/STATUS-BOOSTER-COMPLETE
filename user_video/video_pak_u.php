<?php
include_once"db.php";
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
            <?php echo "<li><a href='../user_after_login/index.php?user_id=$user_id & password=$password'  data-after='Home'>Home</a></li>
            <li><a href='../user_video/videos_com_u.php?user_id=$user_id & password=$password' target=' blank' data-after='Projects'>Videos</a></li>
            <li><a href='../user_blog/dis_art_com_u.php?user_id=$user_id & password=$password' target=' blank' data-after='Projects'>Blogs</a></li>
            <li><a href='../user_gallery/blogs_com_user.php?user_id=$user_id & password=$password' target=' blank' data-after='Projects'>Quotes</a></li>
            <li><a href='../user_after_login/country.php?user_id=$user_id & password=$password' target= 'blank' data-after='Contact'>Countries</a></li>
            <li><a href='../user_after_login/timer/index.php?user_id=$user_id & password=$password' target=' blank' data-after='Contact'>Timer</a></li><li><a href='http://localhost/seproject/STATUS%20BOOSTER/single_page_web/userview/view.php?user_id=$user_id & password=$password' target='blank' data-after='User'>User</a></li>";?>
            
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
<!-- php code for converting url to embeded link -->
<!-- start -->
<?php


// fetching data from database
// start
$result2=mysqli_query($conn," SELECT * FROM videopak") or die("failed to query database" . mysqli_error($conn));

// end
$link1 = 'https://www.youtube.com/watch?v=DABkhfsBAWw';
function getYoutubeEmbedUrl($url)
{
     $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
     $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
    return 'https://www.youtube.com/embed/' . $youtube_id ;
}

$output1 = getYoutubeEmbedUrl($link1);
?>
<!-- end -->
  <div class="main">
    <ul class="cards">
      
      
      <?php
      while ($row2=mysqli_fetch_assoc($result2)){
        $output1 = getYoutubeEmbedUrl($row2['link']);
        echo "<li class='cards_item'>";
        echo "<div class='card'>";
        echo 
            "<iframe width='' height='300' src=$output1  title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen>";
            echo "</iframe>"
            ;
            echo "<div class='card_content'>";
              echo "<h2 class='card_title'>$row2[title]</h2> ";
              echo "<input type='hidden' name='edit_id' value=$row2[link]>";  

              
            echo "</div>";
          echo "</div>";
        echo "</li>";
          }
          ?>
          