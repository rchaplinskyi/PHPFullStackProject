<?php


    function get_menu () {
        global $conn;
        $sql = "SELECT * FROM menu";

        $result = mysqli_query($conn, $sql);
        $menu = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $menu;
    }

    function get_news () {
        global $conn;
        $sql = "SELECT * FROM news";

        $result = mysqli_query($conn, $sql);
        $news = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $news;
    }

    function get_new_by_id($new_id) {
        global $conn;
        $sql = "SELECT * FROM news WHERE id =".$new_id;

        $result = mysqli_query($conn, $sql);
        $new = mysqli_fetch_assoc($result);

        return $new;

    }