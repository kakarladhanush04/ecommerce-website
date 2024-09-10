<?php
if (isset($_COOKIE['user1'])) {
    $username = $_COOKIE['user1'];

    $conn = new mysqli('localhost', 'root', 'Dhanush@2004', 'MyApp');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT cart FROM signup WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($cart);
    $stmt->fetch();
    $stmt->close();

    $conn->close();

    echo json_encode($cart);
} else {
    
    echo "Error: User1 cookie not set.";
}
?>

