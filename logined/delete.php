<?php

require_once '../conn.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM `dept` WHERE `dept`.`id` = '$id'");

header('Location: dept.php');