<?php
require_once '../config/connect.php';
//print_r($_POST);

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$query = "INSERT INTO `products` (`id`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')";

mysqli_query($GLOBALS['connect'], $query);

header('Location: ../index.php');