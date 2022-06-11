<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: ../index.php');
    $_SESSION['message'] = 'Login again';
}
require_once '../conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crime System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <center>           
                <div style="background-color: black ;"  class="header">
                <a href="logout.php" style="color: white;">Log Out!</a>
                <img src="../images/Logotype.jpg" height="120px" width="400px">
                </div>
                <br>
                <div class="zag">
                        <table class = "table">                    
                        <tr><th>
                            <a href="officers.php">qweqweqeqwe</a>
                        </th>
                        <th>
                            <a href="officers.php">qweqweqeqwe</a>
                        </th>
                        <th>
                            <a href="officers.php">qweqweqeqwe</a>
                        </th>
                        <th>
                            <a href="officers.php">qweqweqeqwe</a>
                        </th></tr>
                        </table>
                </div>
                
</body>
</html>