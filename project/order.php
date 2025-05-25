<?php
session_start();

include_once('config.php');

// Make sure user id is set
if (!isset($_SESSION['id'])) {
    die('User not logged in.');
}
$user_id = $_SESSION['id'];

// Fix this key to the actual session key holding the product ID
if (!isset($_SESSION['product_id'])) {
    die('Product not selected.');
}
$product_id = $_SESSION['product_id'];

// Check POST data
if (!isset($_POST['nr_orders'], $_POST['date'], $_POST['time'])) {
    die('Form data incomplete.');
}

$nr_orders = $_POST['nr_orders'];
$date = $_POST['date'];
$time = $_POST['time'];

// Fix parameter name in SQL
$sql = "INSERT INTO orders(user_id, product_id, nr_orders, date, time) VALUES (:user_id, :product_id, :nr_orders, :date, :time)";

$insertOrder = $conn->prepare($sql);

$insertOrder->bindParam(':user_id', $user_id);
$insertOrder->bindParam(':product_id', $product_id);
$insertOrder->bindParam(':nr_orders', $nr_orders);
$insertOrder->bindParam(':date', $date);
$insertOrder->bindParam(':time', $time);

$insertOrder->execute();

header('Location: home.php');
exit;
?>