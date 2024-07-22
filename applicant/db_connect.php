<?php 

// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define database credentials
define('DB_SERVER', "localhost");
define('DB_USERNAME', "u510162695_fms_db_root");
define('DB_PASSWORD', "1Fms_db_root");
define('DB_DATABASE', "u510162695_fms_db");

// Attempt to connect to MySQL database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful!";
}

?>
