<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the payment and obtain the access code (you'll need to integrate a payment gateway like Stripe).

    // Generate a random access code
    $access_code = bin2hex(random_bytes(16));

    // Calculate the expiration date (7 days from now)
    $expiration_date = date('Y-m-d H:i:s', strtotime('+7 days'));

    // Store user information in the database
    $conn = new mysqli("localhost", "username", "password", "database_name");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, email, access_code, expiration_date) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $email, $access_code, $expiration_date);

    if ($stmt->execute()) {
        echo "Enrollment successful! You now have access for 7 days.";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
