<?php
session_start();
require_once '../../conn.php';

$id = $_POST['id'];
$type = $_POST['type'];
$criminal = $_POST['criminal'];
$date = $_POST['date'];


if(!empty($type) && !empty($criminal) && !empty($date))
{
    mysqli_query($conn, "UPDATE `crime` SET `type` = '$type', `criminal` = '$criminal', `date` = '$date' WHERE `crime`.`id` = '$id'");
    $_SESSION['message'] = 'Update successful!';
    header('Location: index.php');

}
else
{
    $_SESSION['message'] = 'Enter all fields';
    header('Location: update.php');
}
?>