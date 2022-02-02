<?php require('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
 <title>Cards</title>
</head>

<body>
   <style type="text/css">
    
    
      *{
       margin: 0px;
       padding: 0px;
      }
      body{
       font-family: arial;
      }
      .main{
      
       margin: 2%;
      }
      
      .card{
           width: 20%;
           display: inline-block;
           box-shadow: 2px 2px 20px black;
           border-radius: 5px; 
           margin: 2%;
          }
      
      .image img{
        width: 100%;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
        
      
       
       }
      
      .title{
       
        text-align: center;
        padding: 10px;
        
       }
      
      h1{
        font-size: 20px;
       }
      
      .des{
        padding: 3px;
        text-align: center;
       
        padding-top: 10px;
              border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
      }
      button{
        margin-top: 30px;
        margin-bottom: 10px;
        background-color: white;
        border: 1px solid black;
        border-radius: 5px;
        padding: 5px;
      }
      button:hover{
        background-color: black;
        color: white;
        transition: .5s;
        cursor: pointer;
      }
      
      </style>

<div class="main">
<?php
   $postQuery="SELECT * FROM videos";
   $runPQ=mysqli_query($conn,$postQuery);
   while($post=mysqli_fetch_assoc($runPQ)){
      ?>
      <div class="card">

      <div class="iframe-container">
        <?=$post['videoLink']?>
      </div>
      <div class="title">
       <h1>
       <?=$post['titlevideo']?></h1>
      </div>
      <div class="des">
       <p class="card-text text-truncate"><?=$post['videoDesc']?></p>


      <a href="post.php"><button>read more</button></a>
      <a><button> Delete </button></a>
      <a><button> Update </button></a>
      </div>
      </div>
     
    
      <?php 
      }
      ?>
</div>
</body>
</html>