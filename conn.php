<?php


#Local Testb
$server = "localhost";
$user = "root";
$password = "";
$db = "Escola";
$door = "3308";

$conn = mysqli_connect($server, $user, $password , $db , $door);

if(!$conn){

    die("Connection failure: " . mysqli_connect_error());
}

echo "<center> Successful Connection </center>";


?>