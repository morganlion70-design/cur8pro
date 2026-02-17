<?php
$host = 'localhost';
$db   = 'curcapit_waw';
$user = 'curcapit_waws'; // change if different
$pass = 'ic{3d.?7a$Kz';     // change if you have a password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Connection Failed: " . $e->getMessage());
}
?>
