<?php
$host = 'localhost';
$user = '';         // Change if using cPanel
$pass = 'ic{3d.?7a$Kz';             // Set your DB password
$db   = 'curcapit_waw';       // DB name you create

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>