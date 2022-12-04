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

setcookie('user-email', $user['email'], time() + 3600, '/');
setcookie('user-name', $user['name'], time() + 3600, '/');
setcookie('user-surname', $user['surname'], time() + 3600, '/');
setcookie('user-lastname', $user['lastname'], time() + 3600, '/');

header('Location: /');
?>