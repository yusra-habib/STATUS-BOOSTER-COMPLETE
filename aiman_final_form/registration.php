
<?php
include_once("connectionn.php");

header('location:indexx.php');
if (isset($_POST['submit'])) {
    $name= $_POST['name'];
    $email= $_POST[ 'emaill'];
    $password= $_POST['pass'];

    $result1=mysqli_query($con,"INSERT INTO usertable (	username ,email,password) VALUES ('$name','$email','$password')")  or die("failed to query database" . mysqli_error($con));
    echo "registration successfully...";


}
else{
    echo  "email already taken";
}

?>





