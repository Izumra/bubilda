<?php
require_once('db_connect.php');

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` where `email` = '$email' and `password` = '$password'";
$result = mysqli_query($connect, $query);
$user = $result->fetch_assoc();

if (count($user) == 0){
    exit();
}
$connect->close();
header('Location: /');
setcookie('user-email', $user['email'], time() + 3600, '/');
?>