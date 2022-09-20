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

$sql = "SELECT * FROM `contacts` WHERE `Name`= 'SHOUROV'";
$result = mysqli_query($conn, $sql);
$no =1;

// Usage of WHERE clause to fetch data from DataBase
$num = mysqli_num_rows($result);
echo $num . " Records are found in the DataBase <br>";

if($num > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo  $no  . ". Hi " . $row['Name'] . " your email " . $row['Email'] . " and your concern problem " . $row['Concern'] . " has been submitted successfully!!" . " Your submitted time was " . $row['Date & Time'];
        echo "<br>";
        $no = $no+1;
    }
}

// Usage of WHERE clause to fetch data from DataBase
$sql = "UPDATE `contacts` SET `Name` = 'SHOUROV' WHERE `contacts`.`SerialNumber` = 11";
$result = mysqli_query($conn, $sql);

if($result){
    echo "We updated the record successfully";
}
else{
    echo "We couldn't updated the record successfully";
}

?>

