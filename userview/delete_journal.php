<?php
include_once("connection.php");

$title=$_GET['title'];
$description=$_GET['description'];
$journal_id=$_GET['journal_id'];
$user_id=$_GET['user_id'];
$password=$_GET['password'];


$query1="DELETE FROM journal WHERE journal_id='$journal_id'";
$result1=mysqli_query($con,$query1);

if ($result1){
    echo "<script>alert('record deleted');
window.location='http://localhost/seproject/STATUS%20BOOSTER/single_page_web/userview/journal_show.php?user_id=$user_id%20%20&%20password=$password>'
</script>";
    
}
else{
    echo "<script>alert('record deletion failed ');
window.location='http://localhost/seproject/STATUS%20BOOSTER/single_page_web/userview/journal_show.php?user_id=$user_id%20%20&%20password=$password>'
</script>";
}

?>