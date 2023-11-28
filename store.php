<?php


$connect = mysqli_connect('localhost', 'root', '', 'firstapp');

$name = $_POST['name'];

$description = $_POST['description'];

$price = $_POST['price'];

$query = mysqli_query($connect, 'INSERT INTO cars (name, description, price) VALUES ("'.$name.'" , "'.$description.'" , "'.$price.'")');

if ($query) {
    header('Location: index.php'); // Исправлено
} else {
    echo "Ошибка: " . mysqli_error($connect);
}

?>




