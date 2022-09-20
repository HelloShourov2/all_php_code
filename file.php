<?php

    // $text = readfile("mytextfile.txt");
    // echo $text;
    // echo "<br>";
    // readfile("mytextfile.txt");


// Use "fopen" to show file

    $fptr = fopen("mytextfile.txt" , "r");
    // echo var_dump($fptr);
    // echo fgets($fptr);

    // if(!$fptr){
    //     die("Unable to open this file");
    // }



    
// reading a file line by line
    // while($a=fgets($fptr)){
    //     echo $a;
    //     echo "End of the file has been reached";
    // }





// use "fread" to read files

    // $content = fread($fptr, filesize("mytextfile.txt"));
    // echo $content;
    // fclose($fptr);
    



// Write a program which reads the content of a file until "lang" "It's a character by character reading process"
while($a=(fgetc($fptr))){
    echo $a;
    if($a=="lang"){
        break;
    }
}
fclose($fptr);





?>