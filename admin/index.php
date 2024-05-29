<?php

    session_start();
    $login = 'admin';
    $password = 'admin';

    if ($_SESSION['login']!==$login && $_SESSION['password']!==$password) {
        header('location: ../login/index.php');
    }
    include_once '../assets/db.php';
    include_once '../assets/functions.php';

 ?>
<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Адмін-панель</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Адміністративна панель сайту</h1>
        </div>
        <div class="col-2">
            <a href="logout.php" class="btn btn-primary">Вийти</a>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Назва новини</th>
                    <th scope="col">Опції</th>
                    <th></th>
                </tr>
                </thead>
                <?php
                    $news = get_news();
                ?>
                <?php foreach ($news as $new): ?>
                <tbody>
                <tr>
                    <th scope="row"><?=$new['id']?></th>
                    <td><?=$new['title']?></td>
                    <td><button type="button" class="btn btn-success">Редагувати</button></td>
                    <td><a href="delete-new.php?new_id=<?=$new['id']?>" class="btn btn-danger">Видалити</a></td>
                    <td></td>
                </tr>
                </tbody>
                <?php endforeach;?>
            </table>

            <a href="add-new.php"  class="btn btn-primary">Додати новину</a>
        </div>
    </div>
</div>
</body>
</html>