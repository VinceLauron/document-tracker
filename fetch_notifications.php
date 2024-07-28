<?php
session_start();
include 'db_connect.php';
if (!isset($_SESSION['login_id'])) {
    header('location: login.php');
    exit;
}



$sql = "SELECT * FROM notifications WHERE status = 0 ORDER BY date_created DESC";
$result = $conn->query($sql);

$notifications = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $notifications[] = $row;
    }
}

$conn->close();

echo json_encode($notifications);
?>
