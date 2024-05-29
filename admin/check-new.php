<?php
session_start();
$login = 'admin';
$password = 'admin';

if ($_SESSION['login']!==$login && $_SESSION['password']!==$password) {
    header('location: ../login/index.php');
}


    $fileName = "";
    chmod($fileName, 0777) ;
if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] != ""){
    move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $_FILES["image"]["name"]);
    $fileName = "img/" . $_FILES["image"]["name"];
}
else {
    $fileName = "img/no-image.jpg";
}

// Підключення до бази даних і вставка даних
try {
    $db = new PDO('mysql:host=sql306.infinityfree.com; dbname=if0_36593569_blog;', 'if0_36593569', 'LcNqsnC75m',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO news (title, image, content, date) VALUES (:title, :image, :content, :datetime)";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(":title", $_POST["title"]);
    $stmt->bindValue(":content", $_POST["content"]);
    $stmt->bindValue(":image", $fileName);
    $stmt->bindValue(":datetime", $_POST["datetime"]);
    $stmt->execute();

    // Перенаправлення користувача після успішного вставлення даних
    header("Location: index.php");
} catch(PDOException $e) {
    // Обробка помилок підключення або запиту до бази даних
    echo "Помилка: " . $e->getMessage();
}