<?php
$servername = "localhost";
$username = "root"; //  database username
$password = ""; // database password
$dbname = "feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = $conn->real_escape_string($_POST['feedback']);

    $sql = "INSERT INTO feedback (feedback) VALUES ('$feedback')";

    if ($conn->query($sql) === TRUE) {
        $message = "Thank you for your feedback!";
        echo "<script>
                alert('$message');
                window.location.href = 'index.php';
              </script>";
        exit();
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
    <title>Feedback Form</title>
    <link rel="stylesheet" href="may.css"> <!-- Link to your CSS file -->
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
            <h1>Submit Your Feedback</h1>
            <form action="submit_feedback.php" method="post">
                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea>
                <input type="submit" value="Submit Feedback">
            </form>
        </div>
    </div>
</body>
</html>
