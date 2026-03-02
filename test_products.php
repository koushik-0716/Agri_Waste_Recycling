<?php
include 'php/config.php';

$stmt = $conn->prepare("SELECT p.*, u.name as recycler_name FROM products p JOIN users u ON p.recycler_id = u.id WHERE p.status = 'available'");
$stmt->execute();
$result = $stmt->get_result();

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products);
$stmt->close();
$conn->close();
?>
