<?php

//========== Modify String ==========
//uppercase
$z = "Hallo World!";
echo strtoupper($z);

//lowercase
$y = "Hallo World!";
echo strtolower($y);

// replace string
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

//reverse string
$a = "Hallo World!";
echo strrev($a);

//removes any whitespace from begin and end
$b = " Hallo World! ";
echo trim($b);

//conver string to array
$c = "kentang";
$d = explode(" ", $c);
print_r($d);

//========== String Concatenate ==========
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z; // HelloWorld

$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z; //Hello World

$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z; //Hellow World

//========== Slicing ==========

//Start the slice at index 6 and end the slice 5 positions later:
$x = "Testing slicing";
echo substr($x, 6, 5); //g sli

//Start the slice at index 6 and go all the way to the end:
$x = "Hello World!";
echo substr($x, 6);

//Get the 3 characters, starting from the "o" in world (index -5):
$x = "Testing Slicing";
echo substr($x, -5, 3);

//negative length
$x = "Hi, how are you?";
echo substr($x, 5, -3);


//========== Escape charcater ==========
$x = "We are the so-called \"Vikings\" from the north.";


?>