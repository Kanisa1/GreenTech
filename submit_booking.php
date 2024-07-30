<?php
$servername = "localhost";
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "office_hours_db"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $date = $conn->real_escape_string($_POST['date']);
    $time = $conn->real_escape_string($_POST['time']);
    $comments = $conn->real_escape_string($_POST['comments']);

    $sql = "INSERT INTO bookings (name, email, date, time, comments) VALUES ('$name', '$email', '$date', '$time', '$comments')";

    if ($conn->query($sql) === TRUE) {
        $message = "Booking successful! Thank you.";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Office Hours</title>
    <link rel="stylesheet" href="contact.css"> <!-- Link to your CSS file -->
    <script>
        function showMessage(message) {
            if (message) {
                alert(message);
            }
        }
    </script>
</head>
<body onload="showMessage('<?php echo $message; ?>')">
    <div class="container">
        <div class="form-wrapper">
            <h1>Book Office Hours</h1>
            <form action="book_office_hours.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
                <br>
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required>
                <br>
                <label for="comments">Comments:</label>
                <textarea id="comments" name="comments" rows="4" cols="50"></textarea>
                <br>
                <input type="submit" value="Book Now">
            </form>
        </div>
    </div>
</body>
</html>
