<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Kgisliim@2025";
$database = "logindata";
$port="3306";


$con = mysqli_connect($servername, $username, $password, $database,$port);

if ($con) {
    echo "Connection passed";
} else {
   echo"Connection failed";
}
?>
