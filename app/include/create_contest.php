<?php
require_once('db_connect.php');

$title = $_POST['title'];
$descr = $_POST['description'];
$date = $_POST['dateByStart'];
$email = $_COOKIE['user-email'];

$imagePath = 'uploads/'.time().$_FILES["image"]["name"];

$query = "INSERT INTO `contests`(`title`, `descr`, `date`, `status`, `email_forganizer`, `imageName`)
            VALUES ('$title','$descr','$date','Приём заявок','$email', '$imagePath')";
mysqli_query($connect, $query);

$connect->close();

header('Location: /');
?>