<?php
session_start();
require_once '../conn.php';

$user_id = $_GET['id'];
$user = mysqli_query($conn, "SELECT * FROM `officer` WHERE `id` = '$user_id'");
$user = mysqli_fetch_assoc($user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Update user</title>
</head>
<body style="font-family: cursive;">
    <center>
    <h2> Update officer`s record </h2>
    <div class = "header" style="background-color:black ;" style ="width: 600px;">
    <a href="searchofficer.php" style="color: white;" class="q">Back!</a>
    </div>
    <br>
        <form action="updateofficercreate.php" method="post">
            <div class="col-md-3"> 
                <div class="qqq" style="border-style: solid;"> 
                    <input type="hidden" name="id" value="<?= $user['id']?>">
                    <p>Officer full name</p>
                    <input type="text" class="form-control" name="name" value="<?= $user['fio']?>"><br>
                    <p>Departament</p>
                    <input type="text" class="form-control" name="dept" value="<?= $user['dept']?>"><br>
                    <p>Rank</p>
                    <input type="text" class="form-control" name="rank" value="<?= $user['zvan']?>"><br>
                    <p>Photo</p>
                    <input type="file" class="form-control" name="path" value="<?= $user['foto']?>">
                    <br>    
                </div>  
                    <br><br>
                    <button type="submit" class="form-control"  >Update</button>
                    <br> 
                     
                        <?php
                            if($_SESSION['message']){
                            echo '<p class="msg">'. $_SESSION['message'] . '</p>';
                            }                            
                            unset($_SESSION['message']);                              
                        ?>
            </div>
        </form>       
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
</style>