<?php

$connect = mysqli_connect('localhost', 'root', '', 'firstapp');

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$id = $_POST['id'];

$query = mysqli_query($connect, "UPDATE cars SET name= '$name', description = '$description', price = '$price' WHERE id = '$id'");

if ($query) {
    header('Location: index.php');
} else {
    echo "Ошибка: " . mysqli_error($connect);
}