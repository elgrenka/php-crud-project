<?php
require_once '../config/connect.php';
$product_id = $_GET['id'];
$query = "SELECT * FROM `products` WHERE `id`='$product_id'";
$product = mysqli_query($GLOBALS['connect'], $query);
$product = mysqli_fetch_assoc($product);
//var_dump($product);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,
        user-scalable=no,
        initial-scale=1.0,
        maximum-scale=1.0,
        minimum-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Edit page</title>
</head>
<body>
<h2>Edit product</h2>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $product_id ?>">
    <p>Title</p>
    <input type="text" name="title" value="<?= $product['title'] ?>">
    <p>Description</p>
    <textarea name="description" cols="20" rows="5">
    <?= $product['description'] ?>
  </textarea>
    <p>Price</p>
    <input type="number" name="price" value="<?= $product['price'] ?>"><br><br>
    <button type="submit">Edit</button>
</form>
</body>
</html>
