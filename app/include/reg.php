<?php
require_once('db_connect.php');

$surname = $_POST['surname'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO `users`(`surname`, `name`, `lastName`, `email`, `password`,  `online`)
                    VALUES ('$surname', '$firstname', '$lastname', '$email', '$password', 0)";
mysqli_query($connect, $query);

$connect->close();
header('Location: /');
?>