<?php
session_start();
require_once '../../conn.php';

$type = $_POST['type'];
$criminal = $_POST['criminal'];
$date = $_POST['date'];

if(!empty($type) && !empty($criminal) && !empty($date))
{
    mysqli_query($conn, "INSERT INTO `crime` (`id`, `type`, `criminal`, `date`) VALUES (NULL, '$type', '$criminal', '$date')");
    header('Location: index.php');
}else
{
    $_SESSION['message'] = 'Enter all fields';
    header('Location: index.php');
}
?>