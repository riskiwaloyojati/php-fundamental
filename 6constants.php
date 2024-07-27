<?php
//Menyimpan nama namespace tempat konstanta ini dipanggil.
namespace MyNamespace;
//diletakan di awal

echo __NAMESPACE__; // Output: MyNamespace
// ========== constants ==========
//Konstanta adalah sebuah nilai yang tidak akan pernah berubah
//dan tidak bisa diubah.
//defaultnya global variable
//define(name, value, case-sensitive);



//==========
define("Halo","PHP is fun");
echo Halo;

const MyCars = "BMW" ;
echo MyCars;

function testCars(){
    echo MyCars;
}
testCars();

// ========= Magic Constants ==========
/*
Magic Constants adalah konstanta khusus yang nilainya ditentukan 
oleh PHP pada saat runtime, berdasarkan konteks di mana mereka 
digunakan. Mereka sering digunakan untuk mendapatkan informasi 
tentang file, baris, fungsi, kelas, metode, atau namespace.
*/

//Menyimpan nama file lengkap dan path dari file yang sedang dieksekusi.
echo __FILE__; // Output: Path lengkap dan nama file ini

//Menyimpan direktori dari file yang sedang dieksekusi.
echo __DIR__; // Output: Path lengkap dari direktori file ini

//Menyimpan nomor baris dari file yang sedang dieksekusi.
echo __LINE__; // Output: Nomor baris ini

//Menyimpan nama fungsi tempat konstanta ini dipanggil.
function myFunction() {
    echo __FUNCTION__; // Output: myFunction
}
myFunction();

//Menyimpan nama kelas tempat konstanta ini dipanggil.
class MyClass {
    public function myMethod() {
        echo __CLASS__; // Output: MyClass
    }
}
$obj = new MyClass();
$obj->myMethod();

//Menyimpan nama metode lengkap dengan kelas tempat konstanta ini dipanggil.
class MyClass1 {
    public function myMethod1() {
        echo __METHOD__; // Output: MyClass::myMethod
    }
}
$obj1 = new MyClass1();
$obj1->myMethod1();

//




?>