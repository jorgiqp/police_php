<?php
    require_once '../conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script
        src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <center>
    <h2> Search Foto </h2>
    <div class = "header" style="background-color:black ;" style ="width: 600px;">
    <a href="officers.php" style="color: white;">Back!</a>
    </div>

    <form action="" method="post">
        <br>
    <div class="col-md-3"
    <p>FotoName</p>    
    <select name="Fname" class="form-control" id="name">
    <option name="name1" class="form-control" selected disabled>Виберіть назву</option>

    <?php
    $images = mysqli_query($conn, "SELECT `FotoName`, `id` FROM `foto`");
    while($images1 = mysqli_fetch_assoc($images)){
        ?>
    <option class="form-control" value="<?=$images1['FotoName'];?>"><?=$images1['FotoName'];?></option>
    <?php
    }
    ?>

    </select>

    <br><br>

    <button type="submit" class="form-control" name="btn">Search Foto</button>

    
        </div>
    
    </form>
    <br>
    <div class="footer">

                </div>
    <div class="zag">
        <table>
            <tr>
                <th>Id</th>
                <th>FotoName</th>
                <th>FotoDesc</th>
                <th>FotoPath</th>
            </tr>
        </table>
    </div>
        <div class="body">
            <?php
                require_once '../conn.php';
                extract($_POST);
                if (isset($btn)) {
                    if (empty($Fname)){
                        $message = "Enter Name!";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                    else
                    {

                        $fname = $_POST['Fname'];
                        $img = mysqli_query($conn, "SELECT * FROM `foto` WHERE `FotoName` LIKE '$fname' ");
                        $img = mysqli_fetch_all($img);
                        
                        foreach ($img as $img) {
                            echo '
                        <table class = "table">
                            <tr>                   
                                <td>' . $img[0] . '</td>
                                <td>' . $img[1] . '</td>
                                <td>' . $img[3] . '</td>
                                <td> <img width = "100" src= "../' . $img[2] . '"></td>             
                            </tr>
                        </table>                        
                            ';
                        }
                    }
                }
            ?>   
        </div>  
                    
    </table>
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
    max-height: 500px;
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