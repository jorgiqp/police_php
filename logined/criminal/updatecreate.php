<?php
session_start();
require_once '../../conn.php';

$id = $_POST['id'];
$name = $_POST['name'];
$type = $_POST['type'];
$desc = $_POST['desc'];
$officer = $_POST['officer'];


if(!empty($name) && !empty($type) && !empty($desc) && !empty($officer))
{
    mysqli_query($conn, "UPDATE `criminal` SET `name` = '$name', `crime` = '$type', `des` = '$desc', `officer` = '$officer' WHERE `criminal`.`id` = '$id'");
    $_SESSION['message'] = 'Update successful!';
    header('Location: index.php');

}
else
{
    $_SESSION['message'] = 'Enter all fields';
    header('Location: update.php');
}
?>