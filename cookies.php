<?php

// syntax to set cookies
// 1st. $Name
// 2nd. $Value
// 3rd. $Expires

setcookie("category", "books", time() + 86400, "/");
echo "The cookie is set";


?>