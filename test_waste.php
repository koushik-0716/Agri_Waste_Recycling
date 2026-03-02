<?php
include 'php/config.php';

$stmt = $conn->prepare("SELECT wl.*, u.name as farmer_name FROM waste_listings wl JOIN users u ON wl.farmer_id = u.id WHERE wl.status = 'available'");
$stmt->execute();
$result = $stmt->get_result();

$waste_listings = [];
while ($row = $result->fetch_assoc()) {
    $waste_listings[] = $row;
}

echo json_encode($waste_listings);
$stmt->close();
$conn->close();
?>
