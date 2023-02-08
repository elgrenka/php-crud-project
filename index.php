<?php
require_once 'config/connect.php';
//global $connect;
$products = mysqli_query($GLOBALS['connect'], "SELECT * FROM `products`");
$products = mysqli_fetch_all($products);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width,
      user-scalable=no,
      initial-scale=1.0,
      maximum-scale=1.0,
      minimum-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styleAdd.css">
    <title>My products</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>&#9998;</th>
        <th>&#10008;</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product[0] ?></td>
            <td><?= $product[1] ?></td>
            <td class="description"><?= $product[2] ?></td>
            <td><?= $product[3] ?></td>
            <td class="edit"><a href="php/edit.php?id=<?= $product[0] ?>">Edit</a></td>
            <td class="delete"><a href="php/delete.php?id=<?= $product[0] ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h2>Add new product</h2>
<form action="php/create.php" method="post">
    <p>Title</p>
    <input type="text" name="title">
    <p>Description</p>
    <textarea name="description" cols="20" rows="5"></textarea>
    <p>Price</p>
    <input type="number" name="price"><br><br>
    <button type="submit">Create</button>
</form>

</body>
</html>
