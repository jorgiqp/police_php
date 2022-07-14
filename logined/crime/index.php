<?php
session_start();
require_once '../../conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>      
    <title>Crime info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
    <body class="bodi">
        <center>           
                <div style="background-color: black ;"  class="header">
                <a href="../index.php" style="color: white;" class="qwe">Go back!</a>
                <img src="../../images/Logotype.jpg" height="120px" width="400px">
                </div>
                <br>
                <div class="zag">
                        <table class = "table">                    
                        <tr>
                            <th>Id</th>
                            <th>Precautionary measures</th>
                            <th>Criminal</th>
                            <th>Date</th>
                            <th>Delete record</th>
                        </tr>
                        </table>
                </div>
                    <div class="body">
                        <?php

                            $img = mysqli_query($conn, "SELECT * FROM `crime`");
                            $img = mysqli_fetch_all($img);
                            
                            foreach ($img as $img) {
                                echo '
                               <table class = "table"> 
                                <tr>                   
                                <td>' . $img[0] . '</td>
                                <td>' . $img[1] . '</td>
                                <td>' . $img[2] . '</td>
                                <td>' . $img[3] . '</td>     
                                <td> <a href="delete.php?id=' . $img[0]. '">Delete</a></td>            
                            </tr>  
                            </table>                      
                                ';
                            }

                        ?>   
                    </div>  
                                
                    
                    
                    <div class = "header" style="background-color:black ;" style ="width: 600px;">                    
                    <a href="search.php" style="color: white;" class="q">Search data!</a>
                    </div>

                    <h2> Add new record </h2>
                    <form action="create.php" method="post">
                    <div class="col-md-3"> 
                    <p>Precautionary measures</p>
                    <select name="type" class="form-control" id="name">
                        <option name="name1" class="form-control" selected disabled>Choose precautionary measures</option>
                        <option name="name1" class="form-control">Killed</option>
                        <option name="name1" class="form-control">Waiting trial</option>
                        <option name="name1" class="form-control">Prisoner</option>
                        <option name="name1" class="form-control">On corrective work</option>
                        <option name="name1" class="form-control">In hospital</option>
                    </select>
                    <p>Criminal</p>
                    <select name="criminal" class="form-control" id="name">
                        <option name="name1" class="form-control" selected disabled>Choose criminal</option>
                        <?php
                        $images = mysqli_query($conn, "SELECT `name`, `id` FROM `criminal`");
                        while($images1 = mysqli_fetch_assoc($images)){
                            ?>
                        <option class="form-control" value="<?=$images1['name'];?>"><?=$images1['name'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <p>Date</p>
                    <input type="date" class="form-control" name="date">                 
                    <br><br>
                    <button type="submit" class="form-control"  >Add new record</button>
                    <br>        
                    <?php
                        if($_SESSION['message']){
                        echo '<p class="msg">'. $_SESSION['message'] . '</p>';
                        }                            
                        unset($_SESSION['message']);                              
                    ?>
                    
                        </div>

                    </form>                    
                
                <br>
                <div class="footer">

                </div>
               
    </center>        
 </body>
 
</html>
<style>
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
.body{                        
    overflow-y: scroll;
    height: 150px;
    max-height: 200px;
    margin-top: 0px;
    margin-bottom: 20px;
    border-bottom: 1px solid #eee;
}
.body td {
    text-align: center;
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    padding: 10px ;
    font-size: 14px;
    vertical-align: top;
    width: 150px;
}
.zag table {
    width:100%;
    table-layout: fixed;
    border: none;
    text-align: center;
}
.qwe{
    color: white;
    position: absolute;
    left: 30px;
    top: 50px;
    text-decoration: none;
    border: none;
}   
.qwe:hover{
    color: white;
}
.q{
    color: white;
    text-decoration: none;
    border: none;
}   
.q:hover{
    color: white;
}
.msg{
    border: 2px solid #ffa908;
    border-radius: 3px;
    padding: 10px;
    text-align: center;
    font-weight: bold;
}
.bodi{
    font-family: cursive;
}
</style>