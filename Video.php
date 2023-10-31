<!DOCTYPE html>
<html>
<head>
    <title>Video Page</title>
</head>
<body>
<?php
if (isset($_GET['access_code'])) {
    $access_code = $_GET['access_code'];

    // Check if the access code is valid and not expired
    $conn = new mysqli("localhost", "username", "password", "database_name");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE access_code = ? AND expiration_date >= NOW()";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $access_code);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($user['video_access'] == 1) {
            // User already accessed the video
            echo "You've already accessed the video.";
        } else {
            // User can access the video
            echo "<video src='video.mp4' controls autoplay></video>";
            
            // Update the user's record to mark video access
            $sql = "UPDATE users SET video_access = 1 WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $user['id']);
            $stmt->execute();
        }
    } else {
        echo "Invalid or expired access code.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "No access code provided.";
}
?>
</body>
</html>
