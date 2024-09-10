<?php
// Check if productId and action are provided
if (isset($_POST['productId'], $_POST['action'])) {
    $productId = $_POST['productId'];
    $action = $_POST['action'];

    // Establish a connection to MySQL
    $mysqli = new mysqli("localhost", "username", "password", "myapp");

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Fetch the current cart for the user
    $username = isset($_COOKIE['user1']) ? $_COOKIE['user1'] : '';
    $query = "SELECT cart FROM signup WHERE username = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($cart);
    $stmt->fetch();
    $stmt->close();

    // Update the cart based on the action
    if ($action === 'increase') {
        // Increment product quantity
        $cart .= $productId . ';'; // Add the productId to cart
    } elseif ($action === 'decrease') {
        // Decrease product quantity
        $cart = str_replace($productId . ';', '', $cart); // Remove the productId from cart
    }

    // Update the cart in the database
    $updateQuery = "UPDATE signup SET cart = ? WHERE username = ?";
    $updateStmt = $mysqli->prepare($updateQuery);
    $updateStmt->bind_param("ss", $cart, $username);
    $updateStmt->execute();
    $updateStmt->close();

    // Fetch the updated cart and return it as response
    $response = ['success' => true, 'cart' => $cart];
    echo json_encode($response);

    // Close MySQL connection
    $mysqli->close();
} else {
    // If productId or action are not provided
    $response = ['success' => false, 'error' => 'Product ID or action not provided'];
    echo json_encode($response);
}
?>
