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
$user_id= $_GET['user_id'];
$password= $_GET['password'];
?>

<form action="journal_add_in_db.php" method="POST">
<div class="paper">
    <div class="paper-content">
    <input type="hidden" name="user_id" value=<?php echo $user_id ?>>
    <input type="hidden" name="password" value=<?php echo $password ?>>
        <input type="hidden" name="password" value=<?php echo $password ?>>
    <input type="text" class="inp" name="title" maxlength="47" tabIndex="1" autofocus placeholder="TITLE">
    <textarea style="    width: 100%;
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
    z-index: 1;" tabIndex="2" name="description" placeholder="DESCRIPTION" autofocus></textarea>

        <!-- <textarea autofocus>Hello world !</textarea> -->
        
    </div>
    
</div>
<input type="submit" name="save" class="submit" style="
    width: 50%;
    background-color: #772a31;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    margin-left:25%;
    border: none;
    border-radius: 4px;
    cursor: pointer;">
</form>
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