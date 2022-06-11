<?php
session_start();
require_once 'conn.php';


$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

$check_login = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login'");


if(!empty($name) && !empty($login) && !empty($password) && !empty($confirm))
{
    if(mysqli_num_rows($check_login) <= 0){   
        if($password === $confirm)
        {
        mysqli_query($conn, "INSERT INTO `users` (`id`, `FIO`, `login`, `password`) VALUES (NULL, '$name', '$login', '$password')");
        $_SESSION['message'] = 'Registration successful!';
        header('Location: index.php');

        } else{
        $_SESSION['message'] = 'Passwords are not the same!';
        header('Location: register.php');
        }
    }
    else{
        $_SESSION['message'] = 'This login is already exist';
        header('Location: register.php');
    }
}else
{
    $_SESSION['message'] = 'Enter all fields';
    header('Location: register.php');
}
?>