<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Kgisliim@123";
$database = "logindata";
$port=3306;


$conn = NEW  mysqli($servername, $username, $password, $database,$port);


if ($con) 
    {
    echo("connection passed");
} 
else {
    echo("connection failed");
}
?>