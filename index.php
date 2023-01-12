<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flipkart |Home</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/utis.css">
</head>

<body>
    <?php
    ?>
    <main>
        <header>
            <nav>
                <div class="logo">
                    <a href="index.php"><img src="./img/iconak.png"></a>
                </div>
                <ul>
                    <li><a href="home.php">Home</a> </li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div class="search">
                    <input type="text" name="" id="" placeholder="Search...........">
                    <button class="btn">search</button>
                </div>
                <div class="account">
                    <button class="btn1">Log in</button>
                    <button class="btn">Sign Up</button>
                </div>
            </nav>
        </header>

        <div class="container">
            <div class="topbar">
                <ul>
                    <li><a href=""><img style="height: 58px;" src="./img/phone.png" alt=""></a></li>
                    <li><a href=""><img style="height: 58px;" src="./img/1.jpg" alt=""></a></li>
                    <li><a href=""><img style="height: 58px; width:66px" src="./img/R.png" alt=""></a></li>
                    <li><a href=""><img style="height: 58px;" src="./img/phone.png" alt=""></a></li>
                    <li><a href=""><img style="height: 58px;" src="./img/1.jpg" alt=""></a></li>
                    <li><a href=""><img style="height: 58px;" width="66px" src="./img/R.png" alt=""></a></li>
                    <li><a href=""><img style="height: 58px;" src="./img/phone.png" alt=""></a></li>
                    <li><a href=""><img style="height: 58px;" src="./img/1.jpg" alt=""></a></li>
                    <li><a href=""><img style="height: 58px;" width="66px" src="./img/R.png" alt=""></a></li>
                </ul>
            </div>
            <div class="banner">
                <img src="" alt="">
            </div>
            <?php
            // $mobile = array("Iphone", "sumsung", "Oppo", "Nokia"); here we can create a multidimensional array for card

            $heading =  array("Mobile Phone", "Toys", "Eletronics", "fashion", "Man Fashion");
            $mobile = array(
                "Iphone" => array("$20" => "./img/phone.png"),
                "Sumgung" => array("$15" => "./img/s1.jpg"),
                "Oppo" => array("$10" => "./img/op1.png"),
                "Nokia A1" => array("$5" => "./img/n1.png"),
                "Iphone X" => array("$200" => "./img/phone.png"),
                "Sumngung s22" => array("$105" => "./img/s3.jpeg"),
                "Oppo A83" => array("$100" => "./img/a83.png"),
                "Nokia A1" => array("$50" => "./img/s1.jpg"),
                "Iphone s9" => array("$209" => "./img/op1.png"),
                "Sumngung j2" => array("$150" => "./img/n1.png"),
                "Oppo A15" => array("$190" => "./img/n2.png"),
                "Nokia C2" => array("$95" => "./img/n3.png")


            );
            ?>
            <?php $arrlength = count($heading);
            for ($x = 0; $x < $arrlength; $x++) { ?>
                <div class="card">
                    <h2 class="my-2"> <?php echo $heading[$x++] ?> </h2>
                    <!-- here we can use foreach for print the value of multidimensional araay -->
                    <?php foreach ($mobile as $key => $value) {
                        foreach ($value as $keys => $values) { ?>
                            <div class="card-item">
                                <?php
                                echo '<img src="' . $values . '" height="113" width="142" alt="">' ?>
                                <div class="lines">
                                    <p><?php echo $key ?></p>
                                    <p class="g"> <?php echo $keys ?></p>
                                    <p>Blue</p>
                                </div>
                                <button class="aad-card">add card</button>
                            </div>
                    <?php }
                    } ?>
                </div>
                <div class="card">
                    <h1 class="my-2"> <?php echo $heading[$x++] ?> </h1>
                    <div class="card-item">
                        <img src="" height="113" width="142" alt="">
                        <div class="lines">
                            <p>product</p>
                            <p class="g"></p>
                            <p>color</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h1 class="my-2"> <?php echo $heading[$x++] ?> </h1>
                    <div class="card-item">
                        <img src="" height="113" width="142" alt="">
                        <div class="lines">
                            <p>product</p>
                            <p class="g"></p>
                            <p>color</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h1 class="my-2"> <?php echo $heading[$x++] ?> </h1>
                    <div class="card-item">
                        <img src="" height="113" width="142" alt="">
                        <div class="lines">
                            <p>product</p>
                            <p class="g"></p>
                            <p>color</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h1 class="my-2"> <?php echo $heading[$x++] ?> </h1>
                    <div class="card-item">
                        <img src="" height="113" width="142" alt="">
                        <div class="lines">
                            <p>product</p>
                            <p class="g"></p>
                            <p>color</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>

    <footer class="flex-all-center">
        <p>Copyringh &copy; flipkart clone </p>
    </footer>
</body>

</html>