<?php
session_start();
require_once '../conn.php';

$fname = $_POST['name'];
$fdesc = $_POST['desc'];
$fpath = $_POST['path'];

if(!empty($fname) && !empty($fdesc) && !empty($fpath))
{
    mysqli_query($conn, "INSERT INTO `dept` (`id`, `place`, `des`, `address`) VALUES (NULL, '$fname', '$fdesc', '$fpath')");
    header('Location: dept.php');
}else
{
    $_SESSION['message'] = 'Enter all fields';
    header('Location: dept.php');
}
?>