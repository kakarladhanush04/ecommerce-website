<?php
// Check if the user1 cookie is set
if (isset($_COOKIE['user1'])) {
    // Retrieve the username from the cookie
    $username = $_COOKIE['user1'];

    // Connect to the database
    $conn = new mysqli('localhost', 'root', 'Dhanush@2004', 'MyApp');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute a query to retrieve the cart value for the username
    $stmt = $conn->prepare("SELECT cart FROM signup WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($cart);
    $stmt->fetch();
    $stmt->close();

    // Close the database connection
    $conn->close();

    // Return the cart value as JSON
    echo json_encode($cart);
} else {
    // If the user1 cookie is not set, return an error message
    echo "Error: User1 cookie not set.";
}
?>
