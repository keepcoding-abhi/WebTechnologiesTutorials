<!DOCTYPE html>
<html>
    <head>
        <title>Data</title>
    </head>
    <body>
    <br><br><br><center>
        <table border>
<?php

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'root123';
    $dbname = 'mysql48';
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(!$conn ) 
    {
        die('Could not connect: ' . mysqli_error($conn));
    }
    echo 'Connected successfully';

    $sql = mysqli_query($conn, "SELECT * FROM user13 ORDER BY perc DESC");
    if($sql)
    {
        while($row = mysqli_fetch_assoc($sql))
        {
            ?>
            <tr>
                <td><?php echo $row['roll']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['dept']; ?></td>
                <td><?php echo $row['perc']; ?></td>
            </tr>
            <?php
        }
        echo '';
    }
    else 
    {
        die('Could not connect: ' . mysqli_error($stmt));
    }
    mysqli_close($sql);
?>         
        </table>
    </center>
</body>
</html>
