<?php 
echo "<h2>Hello World.</h2>";
echo 5 + 5;

$num = 5;
echo "<br>";
echo $num;

// rules that guides writing variables
// 9ice - wrong
// first name - worng - never leave whitepaces betweeen variable names
// user-password - never use hyphen between names
// correct and accepted variable naming methods
// username
// camelCase. -  firstName
// PascalCase -  LastName
// snake_case  - user_password  
// num1  - correct but the variable name must not start with a number

//operators
// arithmetic operators,comparison operators, logic operators
// arithmetic opeartors
// + - * / **  %
echo "<br>";
echo 5 + 5;
echo "<br>";
echo 10 - 5;
echo "<br>";
echo 30/5 ;
echo "<br>";
echo 5 * 5 ;
echo "<br>";
echo 2 ** 4;
echo "<br>";
echo 16**0.5;
echo "<br>";
echo 9%2;

echo "<br>";

// comparison opeartors
// == >=  <=  === != !==
 
var_dump(5 == "5");
echo "<br>";
var_dump(5 === "5");

// logic operators 
// &&  ||
echo "<br>";
var_dump(true && true);
echo "<br>";
var_dump(true && false);
echo "<br>";
var_dump(false && false);

echo "<br>";
echo "<br>";
var_dump(true || true);
echo "<br>";
var_dump(true || false);
echo "<br>";
var_dump(false || false);

echo "<br>";
echo "<br>";

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $username = $_POST['username'];
    $email = $_POST['email'];
    echo "Welcome back " . $username;
    echo "<br>";
    echo "Your email is " . $email;
}




?>
<br><br>
<form method="POST">
    <input type="text" placeholder="Username" name="username">
    <br><br>
    <input type="password" placeholder="Password" name="password">
    <br><br>
    <input type="email" placeholder="Your email" name="email">
    <br><br>
    <input type="submit">
</form>