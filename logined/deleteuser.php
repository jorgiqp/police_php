<?php

require_once '../conn.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM `users` WHERE `users`.`id` = '$id'");

header('Location: users.php');