<?php

$connect = mysqli_connect('localhost', 'root', '', 'firstapp');

$id = $_GET['id'];

$query = mysqli_query($connect, 'SELECT * FROM cars WHERE id ='. $id);

$car = mysqli_fetch_all($query);

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
<form action="update.php" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
    <div>
        <label for="name">Название машины</label>
        <input type="text" name="name" id="name" value="<?php echo $car['name']?>">
    </div>

    <div>
        <label for="description">Описание</label>
        <input type="text" name="description" id="description" value="<?php echo $car['description']?>">
    </div>

    <div>
        <label for=price>Цена</label>
        <input type="text" name="price" id="price" value="<?php echo $car['price']?>">
    </div>

    <div>
        <button type="submit">обновить</button>
    </div>
</form>
</body>
</html>
