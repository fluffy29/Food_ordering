<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
            </div>
            <div class="menu text-right">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="cart.php">Food</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section class="food-search text-center">
        <div class="container">
            <form action="">
                <input type="search" name="search" placeholder="Search for Food..">
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
        </div>
    </section>

    <section class="categories">
        <div class="container">
            <h2 class="text-center">Categories</h2>
            <div class="box-3">
                <img src="images/pizza_3.jpg" alt="Pizza" class="img-responsive img-curve">
                <h3 class="float-text text-white">Pizza</h3>
            </div>
            <div class="box-3">
                <img src="images/burger_1.jpg" alt="Burger" class="img-responsive img-curve">
                <h3 class="float-text text-white">Burger</h3>
            </div>
            <div class="box-3">
                <img src="images/spaggati_2.jpg" alt="Spaghetti" class="img-responsive img-curve">
                <h3 class="float-text text-white">Spaghetti</h3>
            </div>
        </div>
    </section>

    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>
            <div class="food-item">
                <img src="images/burger.menu.jpg" alt="Burger Menu" class="img-responsive img-curve">
                <h3>Burger Menu</h3>
                <p>Delicious burger with fresh ingredients.</p>
                <p class="price">$10.00</p>
                <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="item_name" value="Burger Menu">
                    <input type="hidden" name="item_price" value="10.00">
                    <input type="submit" value="Add to Cart" class="btn btn-primary">
                </form>
            </div>
            <div class="food-item">
                <img src="images/pizza_menu.jpg" alt="Pizza Menu" class="img-responsive img-curve">
                <h3>Pizza Menu</h3>
                <p>Authentic Italian pizza with a variety of toppings.</p>
                <p class="price">$12.00</p>
                <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="item_name" value="Pizza Menu">
                    <input type="hidden" name="item_price" value="12.00">
                    <input type="submit" value="Add to Cart" class="btn btn-primary">
                </form>
            </div>
            <div class="food-item">
                <img src="images/spaggatti_menu.jpg" alt="Spaghetti Menu" class="img-responsive img-curve">
                <h3>Spaghetti Menu</h3>
                <p>Classic spaghetti with a rich tomato sauce.</p>
                <p class="price">$8.00</p>
                <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="item_name" value="Spaghetti Menu">
                    <input type="hidden" name="item_price" value="8.00">
                    <input type="submit" value="Add to Cart" class="btn btn-primary">
                </form>
            </div>
        </div>
    </section>

    <section class="social">
        <div class="container text-center">
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twitter</a></li>
            </ul>
        </div>
    </section>

    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Hassan Majzoub</a></p>
        </div>
    </section>
</body>

</html>
