<?php
session_start();
require_once '../conn.php';

$name = $_POST['name'];
$dept = $_POST['dept'];
$rank = $_POST['rank'];
$fpath = $_POST['path'];

if(!empty($name) && !empty($dept) && !empty($rank) && !empty($fpath))
{
    mysqli_query($conn, "INSERT INTO `officer` (`id`, `fio`, `dept`, `zvan`, `foto`) VALUES (NULL, '$name', '$dept', '$rank', '../images/$fpath')");
    header('Location: officers.php');
}else
{
    $_SESSION['message'] = 'Enter all fields';
    header('Location: officers.php');
}
?>