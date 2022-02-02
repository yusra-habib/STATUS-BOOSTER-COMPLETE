<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- IF USER PRESS ENTER THEN FOCUS WILL GOTO NEXT INPUT FIELD -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./journal_style_new.css">
    <title>Document</title>
</head>
<body>
<?php
include_once("connection.php");
$title=$_GET['title'];
$description=$_GET['description'];
$journal_id=$_GET['journal_id'];
$user_id=$_GET['user_id'];
$password=$_GET['password'];

// $data = str_replace("\n", "<br/>", $description);
// echo preg_replace('/\v+|\\\r\\\n/Ui','<br/>',$description);
// error_reporting(0);
$description=str_replace(array("\\r\\n", "\\r", "\\n"), "\n", $description);

?>

<form action="journal_updte_in_db.php" method="POST">
<div class="paper">
    <div class="paper-content">
        <input type="hidden" name="journal_id" value="<?php echo $journal_id; ?>" >
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" >
        <input type="hidden" name="password" value="<?php echo $password; ?>" >
    <input type="text"  class="inp" name="title" maxlength="47" value="<?php echo $title; ?>" tabIndex="1" autofocus placeholder="TITLE">

    <textarea tabIndex="2" style="    width: 100%;
    max-width: 100%;
    height: 100%;
    max-height: 100%;
    line-height: 30px;
    padding: 0 10px;
    border: 0;
    outline: 0;
    background: transparent;
    color: mediumblue;
    font-family: 'Handlee', cursive;
    font-weight: bold;
    font-size: 18px;
    box-sizing: border-box;
    z-index: 1;" placeholder="DESCRIPTION" name="description" cols="40" rows="5" autofocus><?php echo $description;?>
</textarea>
    

        <!-- <textarea autofocus>Hello world !</textarea> -->
        
    </div>
    
</div>
<input type="submit" name="UPDATE" value="UPDATE" style="background-color: rgb(87, 120, 218);
    border-radius:7.0%;

  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:30%;
  margin: 20px 500;
  width:40%;
  cursor: pointer;" >

</form>
<button onclick="history.back()" style="
    border-radius:5.0%;
    background: linear-gradient(to bottom left, #c22d5e 40%, #5e0d21 100%);            

  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  /* margin: 41px 110px; */
  margin-top:10px;
  margin-left :30%;
  width:40%;
  cursor: pointer;">GO BACK</button>
  

<!-- IF USER PRESS ENTER THEN FOCUS WILL GOTO NEXT INPUT FIELD -->
<script type="text/javascript">
$(document).on('keypress', 'input,select', function (e) {
    if (e.which == 13) {
        e.preventDefault();
        var $next = $('[tabIndex=' + (+this.tabIndex + 1) + ']');
        console.log($next.length);
        if (!$next.length) {
       $next = $('[tabIndex=1]');        }
        $next.focus() .click();
    }
});


</script>
</body>
</html>