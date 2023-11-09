<?php
require_once('./../connection/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $product_id = $_SESSION['product_id'];
    $quantity = $_SESSION['quantity'];
    $price = $_SESSION['price'];

    $sql = "INSERT INTO orders (user_id, product_id, quantity, price) 
    VALUES (?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);

// if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // process order and insert into db
    $stmt = $conn->prepare("INSERT INTO orders (user_id, product_id, quantity, price) VALUES (?, ?, ?, ?)");

    foreach ($_SESSION['cart'] as $item) {
        $product_id = $item['id'];
        $quantity = $item['quantity'];
        $price = $item['price'];

        // Bind parameters
        $stmt->bind_param("iiid", $user_id, $product_id, $quantity, $price);

        // Execute the statement for each item in the cart
        $stmt->execute();
    }

    // Clear the cart after the order is submitted
    $_SESSION['cart'] = [];

    echo "Order placed successfully!";
    exit; 
// }    

if (!mysqli_stmt_prepare($stmt, $sql)) {
header("Location: ./../ui/product.php?error=sqlerror");
exit();
} else {
mysqli_stmt_bind_param($stmt, "sssi", $user_id, $product_id, $quantity, $price);
mysqli_stmt_execute($stmt);
header("Location: ./../ui/order.php?success=entered");
exit();
}
}
