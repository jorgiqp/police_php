<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
</head>
<body class="bodi">
    <h2> Search Foto </h2>
    <a href="index.php">Back!</a>

    <form action="" method="post">
    <p>FotoName</p>    
    <input type="text" name="name1">
    
    <button type="submit">Search Foto</button>

    </form>
    <br>
    <table>
        <tr>
            <th>Id</th>
            <th>FotoName</th>
            <th>FotoDesc</th>
            <th>FotoPath</th>
        </tr>

            <?php
                require_once 'conn.php';

                $fname = $_POST['name1'];

                $img = mysqli_query($conn, "SELECT * FROM `foto` WHERE `FotoName` LIKE '$fname' ");
                $img = mysqli_fetch_all($img);
                
                foreach ($img as $img) {
                    echo '
                <tr>                   
                    <td>' . $img[0] . '</td>
                    <td>' . $img[1] . '</td>
                    <td>' . $img[3] . '</td>
                    <td> <img width = "100" src= "' . $img[2] . '"></td>             
                </tr>                        
                    ';
                }

            ?>     
                    
    </table>
</body>
</html>
<style>
.bodi{
    font-family: cursive;
} 
</style>