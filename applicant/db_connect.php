<?php
$servername = "localhost";
$username = "u510162695_fms_db_root"; 
$password = "1Fms_db_root";
$dbname = "u510162695_fms_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>