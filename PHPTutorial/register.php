<!DOCTYPE html>
<html>
    <head>
        <title>Data</title>
    </head>
    <body>
    <br><br><br><center>
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

    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $perc = $_POST['perc'];
    
    $sql = mysqli_query($conn, "INSERT INTO user13(roll, name, dept, perc) VALUES('$roll', '$name', '$dept', '$perc')");
    if($sql)
    {
        echo 'Registration Successful!';
       
            echo "<form action=\"display.php\" method=\"post\">" .
                "<input type=\"submit\" name=\"display\" value=\"Display\">" .
            "</form>";
    }
    else 
    {
        echo 'Registration Failed!';
        die('Could not connect: ' . mysqli_error($stmt));
    }
    mysqli_close($sql);
?>      
        </center>
</body>
</html>
