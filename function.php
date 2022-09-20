<?php
echo "PHP Functions";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $avg = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $avg++;
    }
    return $sum/$avg;
}


$shourov = [33, 34, 36, 26, 24, 25];
$sumMarks = processMarks($shourov);
$sumMarks = avgMarks($shourov);
echo "total marks scored by shourov out of 600 is $sumMarks";


?>