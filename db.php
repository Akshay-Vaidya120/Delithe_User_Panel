<?php

$servername = "localhost";
$username = "root";
//$password = "8<JWIzfrK";//password         i=Rt!e-g5V-[
$password = "";//password         
$dbname = "Dlithe";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}

