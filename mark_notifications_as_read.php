<?php
include 'db_connect.php';
session_start();

if (!isset($_SESSION['login_id'])) {
    header('location: login.php');
    exit;
}


$sql = "UPDATE notifications SET status = 1";
$conn->query($sql);

$conn->close();
?>
