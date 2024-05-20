<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];

    $item = [
        'name' => $item_name,
        'price' => $item_price
    ];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    array_push($_SESSION['cart'], $item);

    header('Location: cart.php');
    exit();
}
?>
