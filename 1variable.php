<?php

// variable and value
$age = 5;
$birth = 2000;
$name = "jhon";


// outputnya sama ko bang
echo "namanya nya " . $name ." kontol";
echo "namanya nya $name kontol";
echo $age + $birth ;


// untuk check typedata
var_dump(5);
var_dump("Jhon");
var_dump(3.14);
var_dump(true);
var_dump([2, 4, 6]);
var_dump(NULL);


// Inisiasi multi variable
$x = $y = $z = 0;
echo "$z $y";

// variable Scope
$a = 5 ; //global : dideklasari diluar funtion dan hanya bisa di akses di luar funtion

function myTest($x) {
    // using x inside this function will generate an error
    $x = 1; // local : hanya bisa ditulis dan di akses didalam fungsi
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest($x);
echo "$x";

// memanggil variable global dalam function
function myTest1(){
    global $a;
    echo "$a";
}
myTest1();

//static
function myTest2(){
    static $b = 0; //ststic : nilai tidak terhapus setelah di panggil & bersifat local
    echo "$b"; 
    $b++;
}
myTest2();
myTest2();
myTest2();

//variabel local dan global tidak berhubungan
$nama = "Jhon";
function myName(){
    $nama = "tabik";
    echo "$nama";
}
myName();
echo "$nama";

?>

