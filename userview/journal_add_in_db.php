<?php
include_once("connection.php");
$title=$_POST['title'];
$descrip= trim($_POST['description']);
$user_id= $_POST['user_id'];
$password= $_POST['password'];

$sql="INSERT INTO journal(journal_id, title, description, user_id) values('','$title', '$descrip', '$user_id')";
$result2=mysqli_query($con,$sql) or die("failed to query database". mysqli_error($con));

echo "<script>alert('record inserted');
window.location='http://localhost/seproject/STATUS%20BOOSTER/single_page_web/userview/journal_show.php?user_id=$user_id%20%20%20&%20password=$password%20%20%3E'
</script>";





?>