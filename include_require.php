<?php
    // "include" will show error but this will allow you to show other info.
    // include "db_connection.php";


    // "require" also show error, but this will won't allow to access others until fix the error.
    require "db_connection.php";

    $sql = "SELECT * FROM `contacts`";
    $result = mysqli_query($conn, $sql);
    $no = 1;

    // find the number of records
    $num = mysqli_num_rows($result);
    echo $num;
    echo " Records has been found on the DataBase <br>";

    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo  $no  . ". Hi " . $row['Name'] . " your email " . $row['Email'] . " and your concern problem " . $row['Concern'] . " has been submitted successfully!!" . " Your submitted time was " . $row['Date & Time'];
        echo "<br>";
        $no = $no+1;
    }

?>
