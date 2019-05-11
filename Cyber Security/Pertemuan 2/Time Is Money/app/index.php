<?php
if(isset($_GET['pass']))
{
    $pass = "==REDACTED==";
    $input = $_GET['pass'];

    $lastInput = substr($input, -1);

    if($lastInput === $pass[strlen($input)-1])
        sleep(3);

    if($pass === $input)
        echo "==REDACTED==";
    else
        echo "Password Salah";
}
else
{
    echo "Usage: /?pass=";
    echo "<br>";
    echo "Masukkan password";
}