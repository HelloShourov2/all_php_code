<?php
// What is session?
// Session is use to manage information across different pages


// Verify the user login info
session_start();
$_SESSION['username'] = "Shourov";
$_SESSION['favCat'] = "Books";
echo "We have saved your session";


?>