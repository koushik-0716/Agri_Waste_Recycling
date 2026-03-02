<?php
include 'php/config.php';

$result = $conn->query('SELECT email, password FROM users WHERE email="tarunkumargorle555@gmail.com"');
$row = $result->fetch_assoc();
echo 'Password hash: ' . $row['password'] . PHP_EOL;
$conn->close();
?>
