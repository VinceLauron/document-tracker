<?php
session_start();

if (!isset($_SESSION['login_id'])) {
    header('location: login.php');
    exit;
}

// Database connection
require 'db_connect.php';

$sql = "UPDATE notifications SET status = 1";
$conn->query($sql);

$conn->close();
?>
