<?php

echo "Loops in PHP";
echo "<br>";
echo "<br>";
echo "<br>";
echo "while Loops";
echo "<br>";
// while Loops


$a = 10;
echo "<br>";

while($a<50){
    echo $a+1;
    echo "<br>";
    $a+=2;

}
echo "<br>";
echo "<br>";
echo "For Loops";
echo "<br>";
// For Loops

for ($a=0; $a < 10; $a++) { 
    echo $a;
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
echo "Do Loops";
echo "<br>";

do {
    echo "$a <br>";
    $a++;
    echo "<br>";
} while ($a < 100);


echo "<br>";
echo "<br>";
echo "<br>";
echo "Foreach Loops";
echo "<br>";
$ar = array ("apple", "Orange", "banana", "mango");

foreach ($ar as $value) {
    echo "$value <br>";
}

?>