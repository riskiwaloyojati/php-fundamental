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

//object
class fruits {
    public $color;
    public $taste;

    public function __construct($color, $taste){
        $this->color = $color;
        $this->taste = $taste;
    }
    public function messege(){
        return "My fav fruit is a" . $this->color . "and" . $this->taste . "!";
    }
}
$myFruits = new fruits("yellow","sweet");
var_dump($myFruits);

//null value
$f = 5;
$f = null;
var_dump($f);

// ===============================================================
// change type data 
$g = 5;
$g = (string) $g;
var_dump($g); //string(1) "5"




?>

