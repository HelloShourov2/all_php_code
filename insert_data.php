<?php

// connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "shourov";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("sorry we failed to connect:" . mysqli_connect_error());
}
else{    
    echo "Connection was successful <br>";    
}

// Sql query to be executed
$sql = "INSERT INTO `phptable` (`Name`, `Destiny`, `Gender`) VALUES ('Touhid Hassan', 'Bogura', 'Male')";

$result = mysqli_query($conn, $sql);

// check for the database creation success
if($result){
    echo "The Table was created successfully";
}
else{
    echo "The Table was not  created successfully because of this error --->" . mysqli_error($conn);
}




?>