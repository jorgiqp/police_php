<?php
require_once '../conn.php';

$fname = $_POST['name'];
$fdesc = $_POST['desc'];
$fpath = $_POST['path'];

mysqli_query($conn, "INSERT INTO `foto` (`id`, `FotoName`, `FotoPath`, `FotoDesc`) VALUES (NULL, '$fname', 'images/$fpath', '$fdesc')");

header('Location: officers.php');
?>