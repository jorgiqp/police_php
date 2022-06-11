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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
    <center>
            <div style="background-color: black ;"  class="header">
                <img src="images/Logotype.jpg" height="120px" width="400px">
            </div>
        <br><br>
        <h2> Registration </h2><br>
            <form action="signup.php" method="post">
                <div class="col-md-3">
                    <div class="qqq" style="border-style: solid;"> 
                        <p> Name </p>
                        <input type="text" class="form-control" name="name" placeholder="Enter your full name"><br>
                        <p> Login </p>
                        <input type="text" class="form-control" name="login" placeholder="Enter login"><br>
                        <p> Password </p>
                        <input type="password" class="form-control" name="password" placeholder="Enter password"><br>
                        <p> Confirm password </p>
                        <input type="password" class="form-control" name="confirm" placeholder="Confirm password"><br>
                        <a href="index.php" style="color: black ;">Already have an account? Sign in then!</a>
                    </div>
                    <br>                                                                                            
                    <button type="submit" style="background-color:#f3f3f3 ;" class="form-control" name="btn">Register!</button>
                    <br>
                    <?php
                        if($_SESSION['message']){
                        echo '<p class="msg">'. $_SESSION['message'] . '</p>';
                        }                            
                        unset($_SESSION['message']);                              
                    ?>

                </div>

            </form>
                
            <?php
                extract($_POST);
                if (isset($btn)) {
                    if (empty($login)&&empty($password)) {
                        echo "All field are required";
                    }
                    elseif (empty($login)) {
                        echo "Please provide Username";
                    }
                    elseif (empty($password)) {
                        echo "Please provide Password";
                    }
                    else
                    {
                        $query = mysqli_query($conn, "SELECT * FROM `login` WHERE `login`='$login' AND `password`='$password'");
                        
                    }
                    
                }
            ?>

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