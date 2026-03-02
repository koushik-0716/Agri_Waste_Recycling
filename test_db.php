<?php
include 'php/config.php';

echo "Testing database connection and waste listings...\n\n";

// Test connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Database connection successful!\n\n";

// Test waste listings query
$sql = "SELECT wl.*, u.name as farmer_name FROM waste_listings wl JOIN users u ON wl.farmer_id = u.id WHERE wl.status = 'available'";
$result = $conn->query($sql);

if ($result === false) {
    echo "Query failed: " . $conn->error . "\n";
} else {
    echo "Query successful!\n";
    echo "Number of waste listings: " . $result->num_rows . "\n\n";

    if ($result->num_rows > 0) {
        echo "Waste listings:\n";
        while ($row = $result->fetch_assoc()) {
            echo "- ID: " . $row['id'] . ", Type: " . $row['waste_type'] . ", Quantity: " . $row['quantity'] . " " . $row['unit'] . ", Farmer: " . $row['farmer_name'] . ", Status: " . $row['status'] . "\n";
        }
    } else {
        echo "No waste listings found.\n";
    }
}

$conn->close();
?>
