<?php
require_once '../config/connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$id = $_POST['id'];
$query = "UPDATE `products` SET `title` = '$title', `description` = '$description', `price` = '$price' WHERE `products` . `id` = '$id'";

mysqli_query($GLOBALS['connect'], $query);

header('Location: /');