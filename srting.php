<?php
echo "String Function";

echo "<br>";
echo "<br>";
echo "<br>";

$name = "Shourov Hassan";


echo $name;
echo "<br>";
echo "the length of my string is" . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "Hassan");
echo "<br>";
echo str_replace("Shourov", "Touhid", $name);
echo "<br>";
echo str_repeat($name, 20);
echo "<br>";
echo rtrim("<pre>       He is a Good Boy       </pre>")


?>