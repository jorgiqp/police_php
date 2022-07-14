<?php

require_once '../../conn.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM `crime` WHERE `crime`.`id` = '$id'");

header('Location: index.php');