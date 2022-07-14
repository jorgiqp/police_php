<?php
session_start();
require_once '../conn.php';

$id = $_POST['id'];
$name = $_POST['place'];
$login = $_POST['des'];
$password = $_POST['address'];


if(!empty($name) && !empty($login) && !empty($password))
{
    mysqli_query($conn, "UPDATE `dept` SET `place` = '$name', `des` = '$login', `address` = '$password' WHERE `dept`.`id` = '$id'");
    $_SESSION['message'] = 'Update successful!';
    header('Location: update.php');

}
else
{
    $_SESSION['message'] = 'Enter all fields';
    header('Location: update.php');
}
?>