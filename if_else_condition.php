<?php

$a = 65;
$b = 9;
$age =30;

// if($a > 78){
//     echo "a is greater than 78";
// }

// else{
//     echo "a is not greater than 78";
// }

if($age > 65){
    echo "He can't drive";
}
elseif($age < 25){
    echo "Driver can't drive";
}
elseif($age > 25){
    echo "He can drive";
}

else{
    echo "He can't drive even";
}

?>