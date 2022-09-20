<?php
    // connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contact_us";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Die if connection was not successful
    if (!$conn){
        die("sorry we failed to connect:" . mysqli_connect_error());
    }
    else{    
        echo "Connection was successful <br>";    
    }

?>