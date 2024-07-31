<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: Index.php");
    exit();
}

// Database credentials
$servername = "localhost";
$username = "root"; // Change to your database username
$password = ""; // Change to your database password

// Connect to the office_hours_db
$office_hours_db = new mysqli($servername, $username, $password, "office_hours_db");
if ($office_hours_db->connect_error) {
    die("Connection failed: " . $office_hours_db->connect_error);
}

// Connect to the feedback database
$feedback_db = new mysqli($servername, $username, $password, "feedback");
if ($feedback_db->connect_error) {
    die("Connection failed: " . $feedback_db->connect_error);
}

// Fetch data from bookings table
$bookings_sql = "SELECT * FROM bookings";
$bookings_result = $office_hours_db->query($bookings_sql);

// Fetch data from feedback table
$feedback_sql = "SELECT * FROM feedback";
$feedback_result = $feedback_db->query($feedback_sql);

// Close the connections
$office_hours_db->close();
$feedback_db->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Data Overview</title>
    <link rel="stylesheet" href="admin.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>
        <a href="logout.php">Logout</a>
        <h2>Bookings Data</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Time</th>
                <th>Comments</th>
            </tr>
            <?php
            if ($bookings_result->num_rows > 0) {
                while($row = $bookings_result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["time"] . "</td>";
                    echo "<td>" . $row["comments"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No bookings found</td></tr>";
            }
            ?>
        </table>

        <h2>Feedback Data</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Feedback</th>
                <th>Date Submitted</th>
            </tr>
            <?php
            if ($feedback_result->num_rows > 0) {
                while($row = $feedback_result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["feedback"] . "</td>";
                    echo "<td>" . $row["date_submitted"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No feedback found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
