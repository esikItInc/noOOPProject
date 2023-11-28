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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
        <h5 class="text-white h4"><a>Главная</a></h5>
        <h5 class="text-white h4"><a>Категории</a></h5>
        <h5 class="text-white h4"><a>Продуция</a></h5>

    </div>
</div>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="card" style="width: 18rem;">
    <?php
    foreach ($cars as $car)
    {

   ?>
    <img src="/images/<?php echo $car[4]?>" class="card-img-top" alt="...">

    <div class="card-body">
        <p class="card-text"><?php echo $car[1]?></p>
    </div>
    <div class="card-body">
        <p class="card-text"><?php echo $car[2]?></p>
    </div>
    <div class="card-body">
        <p class="card-text"><b><?php echo $car[3]?> $</b></p>
    </div>
        <div>
            <a href="edit.php?id=<?php echo $car[0]?>">Редактровать</a>
            <a href="delete.php?id=<?php echo $car[0]?>">Удалить</a>
        </div>
    <?php
    }

    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
