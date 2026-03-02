<?php
session_start();
include 'php/config.php';

// Initialize user variables if logged in
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
$user_role = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : null;

// Get waste listings (Public - anyone can browse)
$where_conditions = ["wl.status = 'available'"];
$params = [];
$types = "";

if (isset($_GET['waste_type']) && !empty($_GET['waste_type'])) {
    $where_conditions[] = "wl.waste_type LIKE ?";
    $params[] = "%" . $_GET['waste_type'] . "%";
    $types .= "s";
}

if (isset($_GET['location']) && !empty($_GET['location'])) {
    $where_conditions[] = "wl.location LIKE ?";
    $params[] = "%" . $_GET['location'] . "%";
    $types .= "s";
}

if (isset($_GET['max_price']) && !empty($_GET['max_price'])) {
    $where_conditions[] = "wl.price_per_unit <= ?";
    $params[] = $_GET['max_price'];
    $types .= "d";
}

$where_clause = implode(" AND ", $where_conditions);
$stmt = $conn->prepare("SELECT wl.*, u.name as farmer_name FROM waste_listings wl JOIN users u ON wl.farmer_id = u.id WHERE $where_clause");
if (!empty($params)) {
    $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$result = $stmt->get_result();

$waste_listings = [];
while ($row = $result->fetch_assoc()) {
    $waste_listings[] = $row;
}
$stmt->close();

// Debug output
echo "<h1>Debug: Browse Waste Page</h1>";
echo "<p>User ID: " . ($user_id ?: 'Not logged in') . "</p>";
echo "<p>User Role: " . ($user_role ?: 'Not logged in') . "</p>";
echo "<p>Number of waste listings: " . count($waste_listings) . "</p>";

if (count($waste_listings) > 0) {
    echo "<h2>Waste Listings:</h2>";
    echo "<ul>";
    foreach ($waste_listings as $listing) {
        echo "<li>ID: " . $listing['id'] . " - " . $listing['waste_type'] . " - " . $listing['quantity'] . " " . $listing['unit'] . " - Farmer: " . $listing['farmer_name'] . " - Status: " . $listing['status'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No waste listings found.</p>";
}

echo "<h2>GET Parameters:</h2>";
echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<h2>Session:</h2>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
