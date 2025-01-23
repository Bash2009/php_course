<?php

//functions are a very important part of php
function add() {
    echo 5+5;
    echo '<br>';
}

add();          

function greet() {
    echo 'Hello! How are you doing?';
    echo '<br>';
}

greet();

function greetUser($name) {
    echo 'Welcome '.$name.'.';
    echo '<br>';
}

greetUser('Bashir');


function subtract($num1,$num2) {
    echo $num1 - $num2;
    echo '<br>';
}

subtract(10,5);



function fromCmToM($num) {
    echo $num/100,'m';
    echo '<br>';
}
fromCmToM(10);




function fromMToCm($num) {
    echo $num*100,'cm';
    echo '<br>';
}
fromMToCm(10);


function fromCelciusToFarenheit($num) {
    echo ($num*9/5) + 32, 'F';
    echo '<br>';
}
fromCelciusToFarenheit(100);


function fromFarenheitToCelcius($num) {
    echo ($num-32)*5/9, 'C';
    echo '<br>';
}
fromFarenheitToCelcius(212);





?>


<form method="POST">
    <input type="text" placeholder="Value" name="username">
    <br><br>
    <select name='method'>
        <option>Farenheit to celcius</option>
        <option>Celcius to farenheit</option>
    </select>
    <br><br>
    <input type="submit">
</form>