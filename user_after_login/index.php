<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>My Website</title>
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
          <?php echo "<a href='index.php?user_id=$user_id & password=$password'>";?>
            <h1><span>S</span>tatus <span>B</span>ooster</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <?php echo "<li><a href='index.php?user_id=$user_id & password=$password'  data-after='Home'>Home</a></li>
            <li><a href='../user_video/videos_com_u.php?user_id=$user_id & password=$password' target=' blank' data-after='Projects'>Videos</a></li>
            <li><a href='../user_blog/dis_art_com_u.php?user_id=$user_id & password=$password' target=' blank' data-after='Projects'>Blogs</a></li>
            <li><a href='../user_gallery/blogs_com_user.php?user_id=$user_id & password=$password' target=' blank' data-after='Projects'>Quotes</a></li>
            <li><a href='country.php?user_id=$user_id & password=$password' target= 'blank' data-after='Contact'>Countries</a></li>
            <li><a href='timer/index.php?user_id=$user_id & password=$password' target=' blank' data-after='Contact'>Timer</a></li>
            <li><a href='http://localhost/seproject/STATUS%20BOOSTER/single_page_web/userview/view.php?user_id=$user_id & password=$password' target='blank' data-after='User'>User</a></li>";?>
            
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero" style="
	background-image: url(./img/hero-bg.png);
  ">
    <div class="hero container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>WELCOME TO<span></span></h1>
        <h1>STATUS BOOSTER <span></span></h1>
        <a href="#projects" type="button" class="cta">VIEW</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title"><span>STATUS BOOSTER</span> CONTAINS...</h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>VIDEOS</h1>
            
              <?php  echo "<a href='../user_video/videos_com_u.php?user_id=$user_id & password=$password' target=' blank' type='button' class='cta'>VIEW</a>";?>
          </div>
          
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>QUOTES</h1>
            <?php  echo "<a href='../user_gallery/blogs_com_user.php?user_id=$user_id & password=$password' target=' blank' type='button' class='cta'>VIEW</a>";?>
              
          </div>
          <div class="project-img">
            <img src="./img/quotes.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>BLOGS</h1>
            <?php  echo "<a href='../user_blog/dis_art_com_u.php?user_id=$user_id & password=$password' target=' blank' type='button' class='cta'>VIEW</a>";?>
              
          </div>
          <div class="project-img">
            <img src="./img/blogss.png " alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>COUNTRIES</h1>
            <?php  echo "<a href='country.html?user_id=$user_id & password=$password' target=' blank' type='button' class='cta'>VIEW</a>";?>
          </div>
          <div class="project-img">
            <img src="./img/img-1.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>MOTIVATIONAL SPEAKERS</h1>
            <?php  echo "<a href='/se2/index.html?user_id=$user_id & password=$password' target=' blank' type='button' class='cta'>VIEW</a>";?>
          </div>
          <div class="project-img">
            <img src="./img/world_map.png" alt="img">
          </div>
        </div>
      <div class="project-item">
        <div class="project-info">
          <h1>MOVIES</h1>
          <?php  echo "<a href='.\books user\books.php?user_id=$user_id & password=$password' target=' blank' type='button' class='cta'>VIEW</a>";?>
        </div>
        <div class="project-img">
          <img src="https://i.ibb.co/WnvKxQ5/MOVIES.jpg" alt="img">
        </div>
      </div>

      <div class="project-item">
        <div class="project-info">
          <h1>EXCERCISES</h1>
          <?php  echo "<a href='.\books user\books.php?user_id=$user_id & password=$password' target=' blank' type='button' class='cta'>VIEW</a>";?>
        </div>
        <div class="project-img">
          <img src="https://i.ibb.co/X3VVmcc/EXCERCISE.jpg" alt="img">
        </div>
      </div>

      <div class="project-item">
        <div class="project-info">
          <h1>BOOKS</h1>
          <?php  echo "<a href='.\books user\books.php?user_id=$user_id & password=$password' target=' blank' type='button' class='cta'>VIEW</a>";?>
        </div>
        <div class="project-img">
          <img src="https://i.ibb.co/Vm4nRmY/BOOKS.jpg" alt="img">
        </div>
      </div>


      <div class="project-item">
        <div class="project-info">
          <h1>FOOD</h1>
          <?php  echo "<a href='.\books user\books.php?user_id=$user_id & password=$password' target=' blank' type='button' class='cta'>VIEW</a>";?>
        </div>
        <div class="project-img">
          <img src="https://i.ibb.co/3TxYMCf/FOOD.jpg" alt="img">
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <!-- <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/img-2.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>us</span></h1>
        <h2>Front End Developer</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae atque
          repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt
          exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni!
          Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt
          reprehenderit libero enim!</p>
        <a href="#" class="cta">Download Resume</a>
      </div>
    </div>
  </section> -->
  <!-- End About Section -->

  <!-- Contact Section -->

  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>Y</span>usra <span>H</span>abib. <span>Y</span>usra <span>H</span>abib. <span>Y</span>usra <span>H</span>abib. <span>Y</span>usra <span>H</span>abib</h1>
        
      </div>
      <h2>SOFTWARE ENGINEERING PROJECT</h2>
      
  </section>
  <!-- End Footer -->
  <script src="app.js"></script>
</body>

</html>