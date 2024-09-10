<?php

        // Check if productId is provided
        if (isset($_POST['productId'])) {
            $productId = $_POST['productId'];

            // Establish a connection to MySQL
            $mysqli = new mysqli("localhost", "username", "password", "myapp");

            // Check connection
            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }

            // Remove the specified product from the user's cart in the database
            $query = "UPDATE signup SET cart = REPLACE(cart, '$productId;', '')";
            $result = $mysqli->query($query);

            if ($result) {
                // Fetch the updated cart and return it as response
                $query = "SELECT cart FROM signup";
                $result = $mysqli->query($query);
                $row = $result->fetch_assoc();
                $cart = $row['cart'];
                
                echo json_encode($cart);
            } else {
                echo json_encode(['error' => 'Error updating cart']);
            }

            // Close MySQL connection
            $mysqli->close();
        } else {
            echo json_encode(['error' => 'Product ID not provided']);
        }
?>
