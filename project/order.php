<?php

session_start();

include_once('config.php');

$user_id=$_SESSION['id'];
$product_id=$_SESSION['products.php'];

$nr_orders=$_POST['nr_orders'];
$date=$_POST['date'];
$time=$_POST['time'];

$sql="INSERT INTO orders(user_id,product_id,nr_orders,date,time) VALUES (:user_id,:products_id,:nr_orders,:date,:time)";

$insertOrder=$conn->prepare($sql);

$insertOrder->bindParam(':user_id',$user_id);
$insertOrder->bindParam(':product_id',$product_id);
$insertOrder->bindParam(':nr_orders',$nr_orders);
$insertOrder->bindParam(':date',$date);
$insertOrder->bindParam(':time',$time);

$insertOrder->execute();
header('Location:home.php');
?>