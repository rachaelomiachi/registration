<?php
require_once('./../connection/db.php');
require_once('./../layout/header.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the user is logged in
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
$
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
    } 
    // else {
    //     echo "You not logged in. Please log in to place an order.";
    //     exit;
    // }
}
?>
<div class=" container" style="background-color:light blue ">
    <div class="row">
        <div class="col">
            <div>
                <?php
                foreach ($_SESSION['cart'] as $item) {
                    echo $item["description"]. " " . $item["price"].  " " . $item["file"]. "<br>";
                }
                ?>
            </div>
            <form method="post" action="./../includes/order-inc.php">
                <button type="submit">Place Order</button>
            </form>
        </div>
    </div>
</div>
