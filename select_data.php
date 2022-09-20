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




$sql = "SELECT * FROM `contacts`";
$result = mysqli_query($conn, $sql);
$no = 1;

// find the number of records
$num = mysqli_num_rows($result);
echo $num;
echo " Records has been found on the DataBase <br>";
// echo mysqli_num_rows($result);

// display the rows returned by the sql query
if($num > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo  $no  . ". Hi " . $row['Name'] . " your email " . $row['Email'] . " and your concern problem " . $row['Concern'] . " has been submitted successfully!!" . " Your submitted time was " . $row['Date & Time'];
        echo "<br>";
        $no = $no+1;
    }
}

?>