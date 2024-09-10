<?php
if (isset($_POST["signup"])) {
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['cpassword'])) {
        $Username = $_POST['username'];
        $pass = $_POST['password'];
        $cpass = $_POST['cpassword'];
        if($pass!=$cpass){
            echo "Password & Confirm Password are not same!";
            return false;
        }
        $conn = new mysqli('localhost', 'root', 'Dhanush@2004', 'MyApp');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $query = $conn->prepare("SELECT * FROM signup WHERE username = ?");
        $query->bind_param("s", $Username);
        $query->execute();
        $query->store_result();
        if($query->num_rows == 0){
            $query->close();
            $cart="";
            $stmt = $conn->prepare("INSERT INTO signup(username, password, cart) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $Username, $pass, $cart);
            if ($stmt->execute()) {
                echo "Registered Successfully...";
                echo "<a href=\"./pro.html\"> Go to login Page </a>";
            } else {
                echo "Something went wrong!!";
            }
            $stmt->close();
        } 
        else{
            echo "Account already exists with this Email!!";
        }
        $conn->close();
    }
    else {
        echo "All fields are required!!";
    }
}

if (isset($_POST["login"])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $Username = $_POST['username'];
        $pass = $_POST['password'];
        $conn = new mysqli('localhost', 'root', 'Dhanush@2004', 'MyApp');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $query = $conn->prepare("SELECT * FROM signup WHERE Username = ? and Password=?");
        $query->bind_param("ss", $Username,$pass);
        $query->execute();
        $stmt = $query->get_result();
        if($stmt->num_rows == 1 ) {
            $ccokie_name = 'user1';
            $cookie_val = $Username;
            setcookie($ccokie_name, $cookie_val,time()+(60*60));
            header("Location: main.php",true,301);
            exit();
        } 
        else{
            echo "Account doesn't exist!!";
        }
        $stmt->close();
        $conn->close();
    }
    else {
        echo "All fields are required!!";
    }
}

if (isset($_POST["addToCart"])) {

    if (!isset($_COOKIE['user1'])) {
        echo "User not logged in.";
        exit;
    }
    if (isset($_POST['productId'])) {
        $productId = $_POST['productId'].";";
        $username = $_COOKIE['user1'];
        $conn = new mysqli('localhost', 'root', 'Dhanush@2004', 'MyApp');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = $conn->prepare("UPDATE signup SET cart = CONCAT(cart, ?) WHERE username = ?");
        $stmt->bind_param("ss", $productId, $username);
        if ($stmt->execute()) {
            echo "Product added to cart.";
        } else {
            echo "Error adding product to cart.";
        }
        $stmt->close();
        $conn->close();
    } else {
        echo "Product ID not provided.";
    }
}

if(isset($_POST['removeCart'])){
    if (!isset($_COOKIE['user1'])) {
        echo "User not logged in.";
        exit;
    }

    $username = $_COOKIE['user1'];

    $conn = new mysqli('localhost', 'root', 'Dhanush@2004', 'MyApp');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("UPDATE signup SET cart = '' WHERE username = ?");
    $stmt->bind_param("s", $username);
    if ($stmt->execute()) {
        echo "payment successfull for username: " . $username;
    } else {
        echo "Error deleting cart contents.";
    }
    $stmt->close();
    $conn->close();
}
?>



