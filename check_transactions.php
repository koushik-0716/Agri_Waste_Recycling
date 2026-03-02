<?php
include 'php/config.php';

echo "Checking all transactions in the database...\n\n";

$stmt = $conn->prepare("SELECT t.*, u_buyer.name as buyer_name, u_seller.name as seller_name, p.product_name FROM transactions t LEFT JOIN users u_buyer ON t.buyer_id = u_buyer.id LEFT JOIN users u_seller ON t.seller_id = u_seller.id LEFT JOIN products p ON t.item_id = p.id AND t.item_type = 'product' ORDER BY t.transaction_date DESC");
$stmt->execute();
$result = $stmt->get_result();

$transactions = [];
while ($row = $result->fetch_assoc()) {
    $transactions[] = $row;
}

echo "Total transactions: " . count($transactions) . "\n";
if (count($transactions) > 0) {
    foreach ($transactions as $t) {
        echo "- ID: " . $t['id'] . ", Buyer: " . $t['buyer_name'] . " (" . $t['buyer_id'] . "), Seller: " . $t['seller_name'] . " (" . $t['seller_id'] . "), Item Type: " . $t['item_type'] . ", Item ID: " . $t['item_id'] . ", Quantity: " . $t['quantity'] . ", Total: ₹" . $t['total_price'] . ", Date: " . $t['transaction_date'] . "\n";
        if ($t['product_name']) {
            echo "  Product: " . $t['product_name'] . "\n";
        }
    }
} else {
    echo "No transactions found.\n";
}

$stmt->close();
$conn->close();
?>
