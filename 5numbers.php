<?php

//========== PHP numbers ==========
// integer          is_integer()
// float            is_float() is_double()
// Number String    is_numeric()
// infinity         is_infinite() is_finite()
// Nan              is_nan()

$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);
var_dump($b);
var_dump($c);

//check type data
$x = 5985;
var_dump(is_int($x));
$x = 59.85;
var_dump(is_int($x));

//infinite
$x = 1.9e411;
var_dump($x);

//NaN
$x = acos(8);
var_dump($x);

//numerical string
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

//casting string & float to integer

$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>