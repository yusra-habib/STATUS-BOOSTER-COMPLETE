
<?php
include_once("connectionn.php");

$email= $_POST['email'];
$password= $_POST['password'];

$result=mysqli_query($con,"select * from usertable where email='$email' && password='$password'");
$num=mysqli_num_rows($result);
while ($row3=mysqli_fetch_assoc($result)){
    $user_id=$row3['id'];

}
if($num==1){
    echo "<script>alert('welcome');
    </script>";

echo "
    <meta http-equiv='refresh' content='0; url=http://localhost/seproject/STATUS%20BOOSTER/single_page_web/userview/view.php?user_id=$user_id & password=$password'>";
    
}
else{
    echo "<script>alert('register yourself')</script>";
    ?>
    <meta http-equiv="refresh" content="0; url=http://localhost/seproject/STATUS%20BOOSTER/single_page_web/aiman_final_form/indexx.php">
    <?php
    
}
?>