<?php
$servername = "localhost";
$username = "root"; // database username
$password = ""; // your database password
$dbname = "office_hours_db"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $date = $conn->real_escape_string($_POST['date']);
    $time = $conn->real_escape_string($_POST['time']);
    $comments = $conn->real_escape_string($_POST['comments']);

    $sql = "INSERT INTO bookings (name, email, date, time, comments) VALUES ('$name', '$email', '$date', '$time', '$comments')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successful! Thank you.";
        echo '<br><button onclick="redirectToHome()" style="background-color:green; color:white; padding:16px 25px; margin:35px; border-radius:15px;">Go to Home</button>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<script>
function redirectToHome() {
    window.location.href = 'index.php';
}
</script>
