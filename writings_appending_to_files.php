<?php
echo "Welcome to write something to my file";
// $fptr = fopen("mytextfile2.txt" , "w");

// fwrite($fptr, "This is PHP");

// fclose($fptr);


// append

$fptr = fopen("mytextfile2.txt" , "a");

fwrite($fptr, "language");

fclose($fptr);
?>