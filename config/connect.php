<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'mydb2');
if (!$connect) {
    die('Error connecting to db');
} else {
    echo "<script>console.log('Connection success')</script>";
//  print_r("Connection success<br>");
//  var_dump($connect);
}

//if (!$connect) {
//  print_r(mysqli_connect_error());
//} else {
//  print_r("Connection success");
//}