<?php

require_once '../conn.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM `officer` WHERE `officer`.`id` = '$id'");

header('Location: officers.php');