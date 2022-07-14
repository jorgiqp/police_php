<?php
session_start();
require_once '../conn.php';

$id = $_POST['id'];
$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];


if(!empty($name) && !empty($login) && !empty($password) && !empty($confirm))
{
        if($password === $confirm)
        {
        mysqli_query($conn, "UPDATE `users` SET `FIO` = '$name', `login` = '$login', `password` = '$password' WHERE `users`.`id` = '$id'");
        $_SESSION['message'] = 'Update successful!';
        header('Location: updateuser.php');

        } else{
        $_SESSION['message'] = 'Passwords are not the same!';
        header('Location: updateuser.php');
        }
}else
{
    $_SESSION['message'] = 'Enter all fields';
    header('Location: updateuser.php');
}
?>