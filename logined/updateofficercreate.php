<?php
session_start();
require_once '../conn.php';

$id = $_POST['id'];
$name = $_POST['name'];
$dept = $_POST['dept'];
$login = $_POST['rank'];
$password = $_POST['path'];


if(!empty($name) && !empty($login) && !empty($dept))
{
        mysqli_query($conn, "UPDATE `officer` SET `fio` = '$name', `dept` = '$dept', `zvan` = '$login', `foto` = '../images/$password' WHERE `officer`.`id` = '$id'");
        $_SESSION['message'] = 'Update successful!';
        header('Location: updateofficer.php');
}else
{
    $_SESSION['message'] = 'Enter all fields';
    header('Location: updateofficer.php');
}
?>