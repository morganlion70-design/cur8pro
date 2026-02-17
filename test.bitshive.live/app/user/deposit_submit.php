<?php
session_start();
require '../config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$amount = floatval($_POST['amount']);

$stmt = $conn->prepare("INSERT INTO deposits (user_id, amount) VALUES (?, ?)");
$stmt->bind_param("id", $user_id, $amount);

if ($stmt->execute()) {
    echo "Deposit request submitted.";
} else {
    echo "Failed to submit deposit.";
}
?>
