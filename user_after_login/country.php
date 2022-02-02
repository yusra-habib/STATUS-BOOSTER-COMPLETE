<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body style="background-color: #29323c">
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
         
            
            <section id="about">
              <div class="about container">
                <div class="col-left">
                  <div class="about-img">
                    <img src="https://i.ibb.co/1vZK6bx/america.png" alt="img">
                  </div>
                </div>
                
                <div class="col-right">
                  <h1 class="section-title">A<span>merica</span></h1>
                  <section id="services">
                  
                    <a href="../user_video/videos_usa_u.php"><div class="service-bottom">
                      <div class="service-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
                        <h2>VIDEOS</h2>
                        
                      </div>
                    </a>
                      <a href="../user_gallery/blogs_com_user.php"><div class="service-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
                        <h2>QUOTES</h2>
                        
                      </div></a>
    
    
                      <a href="../user_blog/dis_art_usa_u.php"><div class="service-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
                        <h2>BLOGS</h2>
                        
                      </div></a>
                      <a href="../se2/us.html"><div class="service-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
                        <h2>SPEAKERS</h2>
                        
                      </div></a>
                      </div>
                    </div>
                  </section>    

                  <section id="about">
                    <div class="about container">
                      <div class="col-left">
                        <div class="about-img">
                          <img src="https://i.ibb.co/SBZnhrb/austrailia.png" alt="img">
                        </div>
                      </div>
                      
                      <div class="col-right">
                        <h1 class="section-title">A<span>ustrailia</span></h1>
                        <section id="services">
                        
                          <a href="../user_video/videos_aus_u.php"><div class="service-bottom">
                            <div class="service-item">
                              <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
                              <h2>VIDEOS</h2>
                              
                            </div>
                          </a>
                            <a href="../user_gallery/blogs_aus_user.php"><div class="service-item">
                              <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
                              <h2>QUOTES</h2>
                              
                            </div></a>
          
          
                            <a href="../user_blog/dis_art_aus_u.php"><div class="service-item">
                              <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
                              <h2>BLOGS</h2>
                              
                            </div></a>
                            <a href="../se2/australia.html"><div class="service-item">
                              <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
                              <h2>SPEAKERS</h2>
                              
                            </div></a>
                            </div>
                          </div>
                        </section>    

                        <section id="about">
                          <div class="about container">
                            <div class="col-left">
                              <div class="about-img">
                                <img src="https://i.ibb.co/jJZkWYG/pakistan.png"  alt="img">
                              </div>
                            </div>
                            
                            <div class="col-right">
                              <h1 class="section-title">P<span>akistan</span></h1>
                              <section id="services">
                              
                                <a href="../user_video/video_pak_u.php"><div class="service-bottom">
                                  <div class="service-item">
                                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
                                    <h2>VIDEOS</h2>
                                    
                                  </div>
                                </a>
                                  <a href="../user_gallery/blogs_pak_user.php"><div class="service-item">
                                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
                                    <h2>QUOTES</h2>
                                    
                                  </div></a>
                
                
                                  <a href="../user_blog/dis_art_pak_u.php"><div class="service-item">
                                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
                                    <h2>BLOGS</h2>
                                    
                                  </div></a>
                                  <a href="../se2/pakistan.html"><div class="service-item">
                                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
                                    <h2>SPEAKERS</h2>
                                    
                                  </div></a>
                                  </div>
                                </div>
                              </section>    
          </div>         
        </div>  
      </section>
</body>
</html>