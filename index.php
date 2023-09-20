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
    <title>Home</title>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <h1>Home</h1>
    <p>This is a sample page for a food vlogger</p>

    
    
</body>
</html>
    