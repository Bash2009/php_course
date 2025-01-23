<form method="POST">
    <input type="text" placeholder="Username" name="name">
    <br>
    <input type="text" placeholder="Country" name="country">
    <br>
    <input type="submit">
</form>

<?php

$list =['names' => [], 'countries' => []];
if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $name = $_POST['name'];
    $country = $_POST['country'];
    
    
    array_push($list['names'], $name);
    array_push($list['countries'], $country);
    print_r($list['names']);
    echo "<br>";
    print_r($list['countries']);
}

?>