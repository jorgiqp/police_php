<?php

require_once '../../conn.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM `criminal` WHERE `criminal`.`id` = '$id'");

header('Location: index.php');