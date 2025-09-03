<?php
session_start();
include 'db.php';
if(!isset($_SESSION['user_id'])){ die("Please login first."); }
if(isset($_POST['food_id']) && isset($_POST['quantity'])){
    $user_id = $_SESSION['user_id'];
    $food_id = $_POST['food_id'];
    $quantity = $_POST['quantity'];
    $stmt = $conn->prepare("INSERT INTO orders (user_id, food_id, quantity) VALUES (?,?,?)");
    $stmt->bind_param("iii", $user_id, $food_id, $quantity);
    $stmt->execute();
}
?>
