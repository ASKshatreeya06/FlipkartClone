<div class="overlay1" onclick="closesignupform()"></div>
<div class="signupform">
    <span onclick="closesignupform()">&times;</span>
    <form action="" method="post">
        <h1>Sign Up</h1>
        <label for="">full Name</label>
        <input type="text" name="username" required placeholder="Enter Your full name">
        <label for="">Gmail</label>
        <input type="email" name="email" required placeholder="Enter Your email"><br>
        <label for="">phone no.</label>
        <input type="text" name="number" required placeholder="Enter Your phone no.">
        <label for="">Password</label>
        <input type="password" name="password" required  placeholder="Password"><br>
        <label for="">Re-Password</label>
        <input type="password" name="cpassword" required placeholder="Re-Password">
        <button type="submit" name="submit" class="login" href="#">Sign up</button>
    </form>

</div>
<?php
include 'init.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = "SELECT * FROM userid WHERE email = '$email'";
    $query = mysqli_query($conn, $emailquery);
    $emailcount = mysqli_num_rows($query);
    $numquery = "SELECT * FROM userid WHERE phone_no= '$number'";
    $nquery = mysqli_query($conn, $numquery);
    $numcount = mysqli_num_rows($nquery);
    if ($emailcount > 0 ^ $numcount > 0) { ?>
        <script>
            alert("email or number already exists")
        </script>
        <?php
    } else {
        if ($password === $cpassword) {
            $insertquery = "INSERT INTO userid(user_name, email, phone_no, password, re_password) VALUES('$username', '$email', '$number', '$pass', '$cpass')";
            $iquery = mysqli_query($conn, $insertquery);
            if ($iquery) {
        ?>
                <script>
                    alert("inserted successful");
                </script>
            <?php
                
            } else { ?>
                <script>
                    alert("inserted error");
                </script>
<?php
            }
        } else {
            echo "password are not matching";
        }
    }
}
?>

