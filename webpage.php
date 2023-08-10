<?php include ('server.php')?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Shopping</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .product {
            width: 300px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .product img {
            width: 100%;
            height: auto;
        }
        .product h3 {
            margin-top: 10px;
        }
        .product p {
            margin-top: 5px;
            color: #888;
        }
        .product button {
            display: block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .product button:hover {
            background-color: #45a049;
        }
        .cart {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .cart h2 {
            margin-top: 0;
        }
        .cart p {
            margin: 5px 0;
        }
        .cart button {
            display: block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .cart button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Online Shopping</h1>

        <div class="product-list">
            <div class="product">
                <img src="product1.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button onclick="addToCart('Product 1', 19.99)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="product2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>$24.99</p>
                <button onclick="addToCart('Product 2', 24.99)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="product3.jpg" alt="Product 3">
                <h3>Product 3</h3>
                <p>$29.99</p>
                <button onclick="addToCart('Product 3', 29.99)">Add to Cart</button>
            </div>
        </div>

        <div class="cart">
            <h2>Shopping Cart</h2>
            <div id="cart-items"></div>
            <p>Total: $<span id="cart-total">0.00</span></p>
            <button onclick="checkout()">Checkout</button>
        </div>
    </div>

    <script>
        // JavaScript code
        var cartItems = [];

        function addToCart(name, price) {
            cartItems.push({ name: name, price: price });
            updateCart();
        }

        function updateCart() {
            var cartItemsElement = document.getElementById("cart-items");
            var cartTotalElement = document.getElementById("cart-total");
            cartItemsElement.innerHTML = "";
            var total = 0;
            for (var i = 0; i < cartItems.length; i++) {
                var item = cartItems[i];
                cartItemsElement.innerHTML += "<p>" + item.name + " - $" + item.price.toFixed(2) + "</p>";
                total += item.price;
            }
            cartTotalElement.innerHTML = total.toFixed(2);
        }

        function checkout() {
            // Process the checkout logic here
            alert("Thank you for your purchase!");
            cartItems = [];
            updateCart();
        }
    </script>
</body>
</html>