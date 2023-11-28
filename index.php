<?php

$connect = mysqli_connect('localhost', 'root', '', 'firstapp');

$query = mysqli_query($connect, 'SELECT * FROM cars');

$cars = mysqli_fetch_all($query);



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="store.php" method="post">
    <div>
        <label for="name">Название машины</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="description">Описание</label>
        <input type="text" name="description" id="description">
    </div>

    <div>
        <label for=price>Цена</label>
        <input type="text" name="price" id="price">
    </div>

    <div>
      <button type="submit">Создать</button>
    </div>
</form>
<?php
foreach ($cars as $car)
{
    echo "<h1>$car[1]</h1>";
    echo "<p>$car[2]</p>";
    echo "<p><b>$car[3] руб</b></p>";
    echo '<p><img src="'.$car[4].'" alt="" width="150"></p>';
    echo '<a href="edit.php?id='.$car[0].'">Редактировать</a><br>';
    echo '<a href="delete.php?id='.$car[0].'">Удалить</a>';

}
?>
</body>
</html>
