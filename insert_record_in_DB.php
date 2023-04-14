<?php
    // Connecting to database
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $database = "sql_workbench_database";

    $connection = mysqli_connect($servername, $username, $password, $database);

    if($connection){
        echo "Connection successfull <br>";
    }
    else{
        echo "Connection unsuccessful <br>";
    }

    // Inserting record
    $query = "insert into student values (6, 'Nisarg')";

    $result = mysqli_query($connection,$query);

    if($result){
        echo "<br>Data inserted successfully";
    }
    else{
        echo "<br>Data not inserted";
    }

?>