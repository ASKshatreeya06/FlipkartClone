<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "askstore";
$conn  = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
    die("Error in connection".mysqli_connect_error());
} 


?>