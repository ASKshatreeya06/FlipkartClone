<?php 
$db = $db = mysqli_connect('127.0.0.1','root','','askstore');
if (mysqli_connect_error($db)){
    echo "Error in connection".'mysqli_connect_error()';
}
die();

?>