<?php
session_start();
require_once '../../conn.php';

$name = $_POST['name'];
$type = $_POST['type'];
$desc = $_POST['desc'];
$officer = $_POST['officer'];

if(!empty($name) && !empty($type) && !empty($desc) && !empty($officer))
{
    mysqli_query($conn, "INSERT INTO `criminal` (`id`, `name`, `crime`, `des`, `officer`) VALUES (NULL, '$name', '$type', '$desc', '$officer')");
    header('Location: index.php');
}else
{
    $_SESSION['message'] = 'Enter all fields';
    header('Location: index.php');
}
?>