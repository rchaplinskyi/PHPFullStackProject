<?php
session_start();
$login = 'admin';
$password = 'admin';

if ($_SESSION['login']!==$login && $_SESSION['password']!==$password) {
    header('location: ../login/index.php');
}
include_once '../assets/db.php';
include_once '../assets/functions.php';

$new_id = $_GET['new_id'];
if (!is_numeric($new_id))
    header('location: 404.php');
$new = delete_new($new_id);
header('location: index.php');
