


<!DOCTYPE html>
<html>
    <head>
        <style>
            form {
                padding-left: 45%;
            }

            form input,select {
                padding: 10px;
                width: 200px;
                border-radius: 5px;
                border-width: 1px;
            }
        </style>
    </head>
    <body>
        <form method="POST" style='margin: auto;'>
            <input type="text" placeholder="Value" name="name">
            <br><br>
            <select name='method'>
                <option>Farenheit to celcius</option>
                <option>Celcius to farenheit</option>
                <option>Metre to centimeter</option>
                <option>Centimetre to metre</option>
                <option>Metre to kilometer</option>
                <option>Kilometre to metre</option>
            </select>
            <br><br>
            <input type="submit">
        </form>
    </body>
</html>




<?php
function fromCelciusToFarenheit($num) {
    echo ($num*9/5) + 32, 'F';
    echo '<br>';
}


function fromFarenheitToCelcius($num) {
    echo ($num-32)*5/9, 'C';
    echo '<br>';
}

function fromCmToM($num) {
    echo $num/100,'m';
    echo '<br>';
}

function fromMToCm($num) {
    echo $num*100,'cm';
    echo '<br>';
}


function fromKmToM($num) {
    echo $num*1000,'m';
    echo '<br>';
}

function fromMToKm($num) {
    echo $num/1000,'km';
    echo '<br>';
}






if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $value = $_POST['name'];
    $method = $_POST['method'];

    if ($method === 'Farenheit to celcius') {
        fromFarenheitToCelcius($value);
    } elseif($method === 'Celcius to farenheit') {
        fromCelciusToFarenheit($value);
    } elseif($method === 'Metre to centimeter') {
        fromMToCm($value);
    } elseif($method === 'Centimetre to metre') {
        fromCmToM($value);
    } elseif($method === 'Metre to kilometer') {
        fromMToKm($value);
    } else {
        fromKmToM($value);
    }
}
?>