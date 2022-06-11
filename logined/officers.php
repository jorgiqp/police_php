<?php
require_once '../conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>      
    <title>Officers info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
    <body>
        <center>           
                <div style="background-color: black ;"  class="header">
                <a href="index.php" style="color: white;">GO back!</a>
                <img src="../images/Logotype.jpg" height="120px" width="400px">
                </div>
                <br>
                <div class="zag">
                        <table class = "table">                    
                        <tr>
                            <th>Id</th>
                            <th>FotoName</th>
                            <th>FotoDesc</th>
                            <th>FotoPath</th>
                            <th>Delete Photo</th>
                        </tr>
                        </table>
                </div>
                    <div class="body">
                        <?php

                            $img = mysqli_query($conn, "SELECT * FROM `foto`");
                            $img = mysqli_fetch_all($img);
                            
                            foreach ($img as $img) {
                                echo '
                               <table class = "table"> 
                                <tr>                   
                                <td>' . $img[0] . '</td>
                                <td>' . $img[1] . '</td>
                                <td>' . $img[3] . '</td>
                                <td> <img width = "100" src= "../' . $img[2] . '"></td>     
                                <td> <a href="delete.php?id=' . $img[0]. '">Delete</a></td>            
                            </tr>  
                            </table>                      
                                ';
                            }

                        ?>   
                    </div>  
                                
                    
                    
                    <div class = "header" style="background-color:black ;" style ="width: 600px;">                    
                    <a href="search.php" style="color: white;">Search data!</a>
                    </div>

                    <h2> Add new Foto </h2>
                    <form action="create.php" method="post">
                    <div class="col-md-3"> 
                    <p>FotoName</p>
                    <input type="text" class="form-control" name="name">
                    <p>Desc</p>
                    <textarea name="desc" class="form-control"></textarea>
                    <p>Image path</p>
                    <input type="file" class="form-control" name="path">
                    
                    <br><br>
                    <button type="submit" class="form-control"  >Add new Foto</button>
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
    max-height: 200px;
    margin-top: 0px;
    margin-bottom: 20px;
    border-bottom: 1px solid #eee;
}
.body td {
    text-align: left;
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
}
</style>