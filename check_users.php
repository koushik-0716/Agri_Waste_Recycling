<?php
include 'php/config.php';

echo "Checking all users in the database...\n\n";

$stmt = $conn->prepare("SELECT * FROM users ORDER BY id");
$stmt->execute();
$result = $stmt->get_result();

$users = [];
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

echo "Total users: " . count($users) . "\n";
if (count($users) > 0) {
    foreach ($users as $u) {
        echo "- ID: " . $u['id'] . ", Name: " . $u['name'] . ", Email: " . $u['email'] . ", Role: " . $u['role'] . "\n";
    }
} else {
    echo "No users found.\n";
}

$stmt->close();
$conn->close();
?>
