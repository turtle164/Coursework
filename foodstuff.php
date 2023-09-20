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
    <title>Foodstuff</title>
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

        .thing {
            flex: 1;
            background: #333333;
            color: #fff;
            border-radius: 10px;
            margin: 20px 10px;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.6);
            padding: 15px 20px;
            text-align: center;
        }

        .thing img {
            width: 400px;
            height: 400px;
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

        <div class="thing">
            <h2>Momo</h2>
            <img src=https://junifoods.com/wp-content/uploads/2023/07/Momo-chicken-khukura-recipe-500x500.png alt="" <br>
            <p>
                Momo, a popular dumpling dish hailing from Nepal and Tibet, has taken the culinary world by storm. These delectable dumplings are typically made by filling thin sheets of dough with a mixture of minced meat (often chicken, pork, or lamb), vegetables, and a flavorful blend of spices. Momo is cherished for its diverse range of flavors and fillings, offering everything from spicy and savory to mild and vegetarian options. Often served with a side of dipping sauce, momo has become a beloved street food and restaurant favorite, enjoyed by food enthusiasts worldwide for its irresistible taste and cultural significance.
            </p>
        </div>

        <div class="thing">
            <h2>Pani Puri</h2>
            <img src=https://www.foodnetwork.com/content/dam/images/food/fullset/2019/1/07/0/FNK_Pani-Puri_s4x3.jpg alt="" <br>
            <p>
                Pani Puri, also known as Golgappa or Puchka in different regions of India, is a beloved and iconic street food snack. This popular dish consists of small, hollow, crispy puris (fried dough balls) that are filled with a tantalizing mixture of spicy, tangy tamarind water, mashed potatoes, chickpeas, onions, and an array of aromatic spices. Pani Puri is famous for its burst of flavors and textures, as the crispy puris are typically filled just before consumption, ensuring a delightful and refreshing explosion of taste with each bite. Loved by people of all ages, Pani Puri is a quintessential Indian street food that offers a delightful culinary experience.
            </p>
        </div>

        <div class="thing">
            <h2>Chow Mein</h2>
            <img src=https://www.chefkunalkapur.com/wp-content/uploads/2021/12/Veg-Chowmein-1300x867.jpg?v=1638771610 alt="" <br>
            <p>
                Chow Mein is a popular Chinese stir-fried noodle dish that has become a beloved part of international cuisine. This dish typically features thin, long wheat noodles that are stir-fried with a variety of ingredients such as vegetables, protein (commonly chicken, beef, shrimp, or tofu), and a flavorful sauce made from soy sauce, oyster sauce, and other seasonings. Chow Mein can be customized to suit different tastes, ranging from mild and savory to spicy and bold. It's known for its satisfying combination of textures, with the noodles often being slightly crispy on the outside and tender on the inside. Chow Mein is a versatile and delicious dish enjoyed in Chinese restaurants and takeout menus worldwide.
            </p>
        </div>


    </body>

</html>