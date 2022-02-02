<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="journal_show.css">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <title>Document</title>
</head>
<body>
<?php
include_once("connection.php");
$user_id= $_GET['user_id'];

$result2=mysqli_query($con," SELECT * FROM journal where user_id='$user_id'
") or die("failed to query database" . mysqli_error($con));

$result1=mysqli_query($con," SELECT password FROM usertable where id='$user_id'
") or die("failed to query database" . mysqli_error($con));
while ($row1=mysqli_fetch_assoc($result1)){ 
  $password= $row1['password'];
}
?>
<div class="container">

<!-- Task Area -->
<div class="sider">
<?php 
  echo "<a href='view.php?password=$password & user_id=$user_id'>";
  echo "<div class='dots'>";
  echo "<div class='dot1'></div>";
  echo "<div class='dot2'></div>";
  echo "<div class='dot3'></div>";
  echo "</div>";
  echo "</a>";
?>

  <div class="my-name">
    <h1>LIST OF JOURNALS YOU HAVE...</h1>
  </div>


  <div class="uppertaskarea">
    <div class="taskarea">
      <?php
      while ($row2=mysqli_fetch_assoc($result2)){  
        
        
        

        echo '<div class="tasks">';
        echo "<p>" , $row2['title'] , "</p>";        
        echo '<div class="task-update-delete">';
  
        echo   '<div class="update">';
        echo  " 
        <a href='journl_show_after_add_in_db.php?password=password  & journal_id=$row2[journal_id] & user_id=$row2[user_id] & title=$row2[title] & description=$row2[description]'>
        ";
        echo    '<i class="fas fa-pen-square"></i>';
        echo  '</a>';
        echo  '</div>';
        echo  '<div class="delete">';
        echo "<a href='delete_journal.php?password=$password & journal_id=$row2[journal_id] & user_id=$row2[user_id] & title=$row2[title] & description=$row2[description]'>";
        echo   '<i class="fas fa-times-circle"></i>';
        echo  ' </a>';
        echo  '</div>';

        echo  '</div>';
        echo '</div>';

        
        
        // $descrip=$rows["descrip"];
      }
      ?>
      </div>
    

      
    </div>
    
    
      <?php
      echo "<a href='journal_index_new.php?user_id=$user_id & password=$password' style='background-color: #b62948;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 51px 20px;
      margin-left:20%;
      cursor: pointer;' >NEW TASK</a>";
      
      ?>
    
    <button onclick="history.back()" style="
    border-radius:5.0%;
  background-color: #b62948;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 110px;
  cursor: pointer;">GO BACK</button>
  </div>
</body>
</html>
