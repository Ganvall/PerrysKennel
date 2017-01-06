<?php
 include 'connection.php';

// username and password sent from form
$myusername=$_GET['myusername'];
$mypassword=$_GET['mypassword'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$sql="SELECT * FROM members WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result);

if($count==1){

    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username']= "$myusername";
    $_SESSION['password']= "$mypassword";
    header("location:adminminahundar.php");
}
else {
    echo "Wrong Username or Password";
}
?>