<?php
include 'php/config.php';

session_start();
$_SESSION['user_id'] = 3; // Assuming industry user ID is 3
$_SESSION['user_role'] = 'industry';

echo "Testing industry purchases...\n\n";

// Simulate the get_industry_purchases request
$user_id = $_SESSION['user_id'];
$user_role = $_SESSION['user_role'];

if ($user_role != 'industry') {
    echo "Unauthorized\n";
    exit();
}

$stmt = $conn->prepare("SELECT t.*, p.product_name, p.unit, u.name as seller_name FROM transactions t JOIN products p ON t.item_id = p.id JOIN users u ON t.seller_id = u.id WHERE t.buyer_id = ? AND t.item_type = 'product' ORDER BY t.transaction_date DESC");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$purchases = [];
while ($row = $result->fetch_assoc()) {
    $purchases[] = $row;
}

echo "Number of purchases: " . count($purchases) . "\n";
if (count($purchases) > 0) {
    foreach ($purchases as $purchase) {
        echo "- Product: " . $purchase['product_name'] . ", Quantity: " . $purchase['quantity'] . ", Total: ₹" . $purchase['total_price'] . ", Seller: " . $purchase['seller_name'] . "\n";
    }
} else {
    echo "No purchases found.\n";
}

$stmt->close();
$conn->close();
?>
