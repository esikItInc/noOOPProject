<?php

$connect = mysqli_connect('localhost', 'root', '', 'firstapp');

$id = $_GET['id'];

$query = mysqli_query($connect, 'DELETE FROM cars WHERE id = '.$id);

if ($query) {
    header('Location: index.php');
} else {
    echo "Ошибка: " . mysqli_error($connect);
}

?>