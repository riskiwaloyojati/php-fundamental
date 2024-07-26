<?php

// string
// integer
// float 
// boolean 
// array 
// object 
// NULL
// resource


// string
$a = "Hello world!";
$b = 'Hello world!';
var_dump($a);
echo "<br>";
var_dump($b);

//int
$c = 5;
var_dump($c);

//float
$d = 10.365;
var_dump($d);

//boolean = tidak memeiliki nilai default
$e;
var_dump($e); // Output: NULL
$e = true;
var_dump($e); // Output: bool(true)
$e = false;
var_dump($e); // Output: bool(false)

//Array
$fruits = array("banana","aplle","pinaple");
var_dump($fruits);



?>

