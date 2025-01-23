 <form method="POST">
    <input type="text" placeholder="Username" name="name">
    <br>
    <input type="password" placeholder="Password" name="password">
    <br>
    <input type="password" placeholder="Confirm password" name="password2">
    <br>
    <input type="email" placeholder="Your email" name="email">
    <br>
    <input type="submit">
</form>

<?php 

    $filename = "example.txt";
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $username = $_POST["name"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];
        $email = $_POST["email"];

        if ($password === $password2) {
            $file = fopen($filename, mode:'a');
            fwrite($file, data: "username:" . $username . "\n");
            fwrite($file, data: "email:" . $email . "\n");
            fwrite($file, data: "password:" . $password . "\n \n");
            fclose($file);
        } else {
            echo "Passwords are not identical";
        }
        
    }
?>