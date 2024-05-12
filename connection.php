<?php
//servername username password default for xampp server running on localhost

$servername = "localhost";//change server name as required
$username = "root";//change root name as required
$password = "";//change password as required
$database = "protfolio";//change database name with your database namew

$conn = mysqli_connect($servername, $username, $password, $database);//string for connection with xampp mysql
?>
