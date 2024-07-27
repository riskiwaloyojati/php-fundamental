<?php

//if

$t = 10;
if ($t > 1){
    echo "hallo tod! \n";
}
$a = 5;
if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7 \n";
}

//if else
$b = date("H"); //date menunjukan waktu saat ini "H" satuan jam dalam 24jam
if ($b < 12) {
    echo "Selamat pagi!";
} elseif ($b < 18) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}
echo "\n";

//shorthand if
$c = 10;
$d = $c > 3 ? "halo" :  "tod!" ;
echo "$d \n";

//nested if
$e = 13;

if ($e > 10) {
  echo "Above 10";
  if ($e > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
echo "\n";

//switch
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break; //<= jika break di hapus maka kode selanjutnya akan di eksekusi walau tidak match dengan kondisi
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
  case "lime": //<= case dapat lebih dari 1 
    echo "Your favorite color is green!";
    break;
  default: //<= jika tidak ada konsisi yang cocok maka yang di eksekusi adalah default
    echo "Your favorite color is neither red, blue, nor green!";
}
echo "\n";




?>