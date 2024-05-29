<?php
    $server = "sql306.infinityfree.com";
    $user = "if0_36593569";
    $pass = "LcNqsnC75m";
    $db = "if0_36593569_blog";

    $conn = mysqli_connect($server, $user, $pass, $db);
    mysqli_set_charset($conn, 'utf8');
    if (mysqli_connect_errno()) {
        echo "Помилка при підключенні до бази даних";
    }