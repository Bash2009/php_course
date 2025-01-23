<?php 

$fruit1 = "Apple";
$fruit2 = "Cashew";
$fruit3 = "Banana";

// simple array
$fruits = ["Apple","Pineapple","Water Melon","Banana"];
$cities = array("Ikeja","Ibadan","Paris");

var_dump($fruits);
echo"<br>";
var_dump($cities);
echo"<br>";
echo $cities[1];


// associative array
$employee = ["name"=>"Paul","age"=>25,"Job title"=>"Software Engineer"];
echo"<br>";
echo $employee ["name"];

// Multidimensional array
$data = [[1,2,3],["python","c++","javascript"],["kotlin","flutter","swift"],[true,false,[4,5,6]]];
$car = ["name"=>["Tesla","Camry","Toyota"],"model"=>["model y","mode 2014","corolla"]];
echo"<br>";
echo $data[1][0];
echo"<br>";
echo $data[3][2][0];
echo"<br>";
echo $car['name'][1].' '. $car['model'][1];
echo"<br>";


// sort in accending order
sort($fruits);
var_dump($fruits);
echo"<br>";

//sort in decending order
rsort($fruits);
var_dump($fruits);
echo"<br>";

//for sorting associative arrays
asort($employee);
var_dump($employee);
echo"<br>";

ksort($employee);
var_dump($employee);
echo"<br>";

arsort($employee);
var_dump($employee);
echo"<br>";

krsort($employee);
var_dump($employee);
echo"<br>";

?>
