<?php
session_start();

// Database credentials
$servername = "localhost";
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "admin_db"; // You can use an existing database or create a new one

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$registrationError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminUsername = $conn->real_escape_string($_POST['username']);
    $adminPassword = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_BCRYPT);

    $sql = "INSERT INTO admins (username, password) VALUES ('$adminUsername', '$adminPassword')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit(); // Always call exit after a redirect
    } else {
        $registrationError = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="admin.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="container">
        <h1>Admin Registration</h1>
        <form action="register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Register">
        </form>
        <?php if ($registrationError): ?>
            <p style="color:red;"><?php echo $registrationError; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
