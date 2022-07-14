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
<body class="bodi">
    <center>           
                <div style="background-color: black ;"  class="header">
                <a class="qaz" href="users.php">All users</a>
                <a href="logout.php" style="color: white;" class="qwe">Log Out!</a>
                <img src="../images/Logotype.jpg" height="120px" width="400px">
                <a  class="q"> Current user -  <?=$_SESSION['user']['FIO']?> </a>
                </div>
                <br>
                <div class="zag">
                        <table class = "table">                    
                        <tr><th>
                            <a href="officers.php" class="qqq">Officers</a>
                        </th>
                        <th>
                            <a href="dept.php" class="qqq">Departaments</a>
                        </th>
                        <th>
                            <a href="crime/index.php" class="qqq">Crimes</a>
                        </th>
                        <th>
                            <a href="criminal/index.php" class="qqq">Criminals</a>
                        </th></tr>
                        </table>
                </div>
                <div class="footer">

                </div>
                
</body>
</html>
<style>
.q{
    color: white;
    position: absolute;
    right: 30px;
    top: 70px;
    text-decoration: none;
    border: none;
}   
.q:hover{
    color: white;
}
.qwe{
    color: white;
    position: absolute;
    right: 30px;
    top: 30px;
    text-decoration: none;
    border: none;
}   
.qwe:hover{
    color: white;
}
.footer{
    background-color: #000000;
    width: 100%;
    height: 50px;
    color: black;
    text-align: center;
    font-size: 20px;
    padding-top: 10px;
    position: absolute;
    bottom: 0;
    left: 0;
}
.zag table {
    width:100%;
    table-layout: fixed;
    border: none;
    text-align: center;
}
.qqq{
    color: black;
    text-decoration: none;
    border: none;
}
.zag th{
    border-left: 1px solid #000000;
    border-right: 1px solid #000000;
}
.qaz{
    color: white;
    position: absolute;
    left: 30px;
    top: 50px;
    text-decoration: none;
    border: none;
    
}   
.qaz:hover{
    color: white;
}
.bodi{
    font-family: cursive;
}
</style>