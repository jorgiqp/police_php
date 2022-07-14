<?php
session_start();
require_once '../../conn.php';

$user_id = $_GET['id'];
$user = mysqli_query($conn, "SELECT * FROM `crime` WHERE `id` = '$user_id'");
$user = mysqli_fetch_assoc($user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Update crime</title>
</head>
<body style="font-family: cursive;">
    <center>
    <h2> Update crime record </h2>
    <div class = "header" style="background-color:black ;" style ="width: 600px;">
    <a href="search.php" style="color: white;" class="q">Back!</a>
    </div>
    <br>
        <form action="updatecreate.php" method="post">
            <div class="col-md-3"> 
                <div class="qqq" style="border-style: solid;"> 
                <input type="hidden" name="id" value="<?= $user['id']?>">
                <p>Crime type</p>
                    <select name="type" class="form-control" id="name">
                        <option name="name1" class="form-control"><?= $user['type']?></option>
                        <option name="name1" class="form-control">Killed</option>
                        <option name="name1" class="form-control">Waiting trial</option>
                        <option name="name1" class="form-control">Prisoner</option>
                        <option name="name1" class="form-control">On corrective work</option>
                        <option name="name1" class="form-control">In hospital</option>
                    </select><br>
                    <p>Criminal</p>
                    <select name="criminal" class="form-control" id="name">
                        <option name="name1" class="form-control"><?= $user['criminal']?></option>
                        <?php
                        $images = mysqli_query($conn, "SELECT `name`, `id` FROM `criminal`");
                        while($images1 = mysqli_fetch_assoc($images)){
                            ?>
                        <option class="form-control" value="<?=$images1['name'];?>"><?=$images1['name'];?></option>
                        <?php
                        }
                        ?>
                    </select><br>
                    <p>Date</p>
                    <input type="date" value="<?= $user['date']?>" class="form-control" name="date"                    
                    <br><br>
                    <button type="submit" class="form-control"  >Add new record</button>
                    <br>        
                    
            </div><br>
            <?php
                        if($_SESSION['message']){
                        echo '<p class="msg">'. $_SESSION['message'] . '</p>';
                        }                            
                        unset($_SESSION['message']);                              
                    ?>
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