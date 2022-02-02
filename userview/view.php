<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./user_page.css">
  <title>Document</title>
</head>
<body>

<?php 
include_once("connection.php");

$user_id=$_GET['user_id'];
$password=$_GET['password'];
?>

  <section class="hero-bg hero-content neon-hero neon hero-header" style="height:100%;background-image: url(https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.shutterstock.com%2Fsearch%2Fblack%2Bbrick%2Bwall&psig=AOvVaw2GQr_SL1qQsWN7DovZXDfQ&ust=1642433270395000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJjmyKDKtvUCFQAAAAAdAAAAABAD);">
  
    <?php echo "
    <a href='http://localhost/seproject/STATUS%20BOOSTER/single_page_web/user_after_login/index.php?user_id=$user_id & password=$password'><div class='hero-text'>
    <div class='title'>VIEW WEBSIE.</div>
  </div></a>
    ";?>
    

  <?php
  echo "<a href='journal_show.php?user_id=$user_id & password=$password'>";
  ?>
    
    <div class="hero-text">
      <div class="title">MAKE JOURNAL.</div>
    </div></a>
    <a href="http://127.0.0.1:5500/index.html"><div class="hero-text">
      <div class="title">LOG OUT.</div>
    </div></a>

    



  </section>

</body>
</html>