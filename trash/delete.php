<?php

require_once 'conn.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM `foto` WHERE `foto`.`id` = '$id'");

header('Location: index.php');