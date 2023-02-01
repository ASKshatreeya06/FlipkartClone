<?php
// require_once 'core/init.php';
// if (isset($_POST['Username']) && isset($_POST['password'])){
//     $usename = $_POST['Usename'];
//     $password = $_POST['password'];
//     $query = "SELECT * FROM `users` WHERE `username` = `$username` AND `password` = `$password`";
//     $result = mysqli_query($db,$query);
//     if 
// }
?>

<div class="overlay" onclick="closeloginform()"></div>
<div class="loginform">

    <span onclick="closeloginform()">&times;</span>
    <form action="" method="post">
        <h1>Login</h1>
        <label for="">Username</label>
        <input type="text" name="Username" id="" placeholder="Username">
        <label for="">Password</label>
        <input type="password" name="passowrd" id="" placeholder="Password">
    </form>
    <button class="login">Log in</button>
</div>