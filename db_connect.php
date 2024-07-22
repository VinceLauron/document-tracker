<?php 

define('DB_SERVER',"localhost");
define('DB_USERNAME',"u510162695_fms_db_root");
define('DB_PASSWORD',"1Fms_db_root");
define('DB_DATABASE',"u510162695_fms_db");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if(!$conn){
    die("Connection Failed: ". mysqli_connect_error());
}

?>