<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="cart.php">Food</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Your Cart</h2>
            <?php if (!empty($_SESSION['cart'])): ?>
                <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                    <div class="food-item">
                        <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                        <p class="price">$<?php echo htmlspecialchars($item['price']); ?></p>
                        <form action="remove_from_cart.php" method="post">
                            <input type="hidden" name="item_index" value="<?php echo $index; ?>">
                            <input type="submit" value="Remove" class="btn btn-primary">
                        </form>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center">Your cart is empty.</p>
            <?php endif; ?>
        </div>
    </section>

    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Hassan Majzoub</a></p>
        </div>
    </section>
</body>

</html>
