<?php
session_start();
require_once 'conn.php';

$login = $_POST['login'];
$password = $_POST['password'];

$check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0){
    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "FIO" => $user['FIO'],
    ];

    header('Location: logined/index.php');

}else{
    $_SESSION['message'] = 'Login or password is incorrect';
    header('Location: index.php');
}
?>