<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>About</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        /*Navigation bar*/
        nav {
            background-color: #000;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
        }

        .menu {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .menu li {
            margin: 0 10px;
            list-style: none;
        }

        .menu li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .menu li a:hover {
            color: rgb(175, 255, 175);
        }

        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            animation: fade-in 1s ease-out;
            color: #fff;
        }

        @keyframes fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>


    <body>
        <!--Navigation Bar-->
        <nav>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="foodstuff.php">Foodstuff</a></li>
                <?php if (isset($user)) : ?>
                    <li><a href="logout.php">Log out</a></li>
                <?php else : ?>

                    <li><a href="login.php">Log in</a></li>
                    <li><a href="signup.html">Sign up</a></li>

                <?php endif; ?>
            </ul>
        </nav>

        <!--Hero Section-->
        <section id="home" class="hero">
            <div class="hero-content">
                <h1>Welcome To My Food Vlog.</h1>
                <p>I am a foodie and love to review different cuisines found all over the world.</p>
            </div>
        </section>

    </body>

</html>