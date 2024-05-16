<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "blog";

    $conn = mysqli_connect($server, $user, $pass, $db);
    if (mysqli_connect_errno()) {
        echo "Помилка при підключенні до бази даних";
    }