<?php
session_start();
if (isset($_SESSION['user'])){
    header('Location: logined/index.php');
}
require_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    echo "<link rel='stylesheet' href='style.css'>";
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <center>
            <div style="background-color: black ;"  class="header">
                <img src="images/Logotype.jpg" height="120px" width="400px">
            </div>
        <br><br>
        <h2> Authorization </h2><br><br><br><br>
            <form action="signin.php" method="post">
                <div class="col-md-3">
                    <div class="qqq" style="border-style: solid;"> 
                        <p> Login </p>
                        <input type="text" class="form-control" name="login" placeholder="Enter your login"><br>
                        <p> Password </p>
                        <input type="password" class="form-control" name="password" placeholder="Enter password"><br>
                        <a href="register.php" style="color: black ;">Don`t have an account? Register then!</a>
                    </div>
                    <br><br><br>
                    <button type="submit" style="background-color:#f3f3f3 ;" class="form-control" name="btn">Login!</button>
                    <br>
                    <?php
                        if($_SESSION['message']){
                        echo '<p class="msg">'. $_SESSION['message'] . '</p>';
                        }                            
                        unset($_SESSION['message']);                              
                    ?>
                </div>
            </form>
                
            

            <div class="footer">
            </div>
    </center>
</body>
</html>
<style>
.qqq{
    position: static;
    border: 4px double black; /* Параметры границы */
    background: #f3f3f3; /* Цвет фона */
    padding: 10px; /* Поля вокруг текста */
    
    border-radius: 30px;
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
.msg{
    border: 2px solid #ffa908;
    border-radius: 3px;
    padding: 10px;
    text-align: center;
    font-weight: bold;
}
</style>