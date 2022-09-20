<?php
//start the session and get the data

session_start();
if(isset($_SESSION['username'])){

    echo "Welcome " . $_SESSION['username'];
    echo "<br>";
    echo "Your favorite category is " . $_SESSION['favCat'];
}
else{
    echo "Please login to continue";
}

?>