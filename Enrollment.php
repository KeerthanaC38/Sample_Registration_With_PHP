<!DOCTYPE html>
<html>
<head>
    <title>Enrollment Form</title>
</head>
<body>
    <form action="process_enrollment.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" required><br>

        <label for="city">City:</label>
        <input type="text" name="city" required><br>

        <label for="state">State:</label>
        <input type="text" name="state" required><br>

        <label for="zip">Zip:</label>
        <input type="text" name="zip" required><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="card_number">Credit Card Number:</label>
        <input type="text" name="card_number" required><br>

        <input type="submit" value="Enroll">
    </form>
</body>
</html>