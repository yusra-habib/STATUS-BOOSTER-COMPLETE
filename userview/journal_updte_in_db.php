<?php
include_once("connection.php");
$title=$_POST['title'];
$descrip= trim($_POST['description']);
$journal_id= $_POST['journal_id'];
$user_id= $_POST['user_id'];
$password= $_POST['password'];

$querry="UPDATE journal SET title='$title' ,description='$descrip' WHERE journal_id='$journal_id'";
        $data=mysqli_query($con,$querry);
        
        if($data){
            echo "<script>alert('record inserted');
            window.location='http://localhost/seproject/STATUS%20BOOSTER/single_page_web/userview/journal_show.php?user_id=$user_id%20%20&%20password=$password>'
            </script>";
            
        }
    
        else{
            echo "<script>alert('record insertion failed');
            window.location='http://localhost/seproject/STATUS%20BOOSTER/single_page_web/userview/journal_show.php?user_id=$user_id%20%20&%20password=$password>'
            </script>";
        }

?>