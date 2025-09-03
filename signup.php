<?php
include 'db.php';
if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt = $conn->prepare("INSERT INTO users (username,email,password) VALUES (?,?,?)");
    $stmt->bind_param("sss", $username, $email, $password);
    if($stmt->execute()){ header("Location: ../login.html"); }
}
?>
