<?php
$host="localhost"; //Add your SQL Server host here
$user="root"; //SQL Username
$pass="hej123"; //SQL   Password
$dbname="phpskit"; //SQL Database Name
$con=mysqli_connect($host,$user,$pass,$dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>