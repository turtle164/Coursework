<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = "";     // Default password for XAMPP
$dbname = "cw_1"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// After form validation
$newUsername = $_POST['newUsername'];
$newPassword = $_POST['newPassword'];

$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$newUsername', '$hashedPassword')";
$conn->query($sql);

// After form submission
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT id, password FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // User is authenticated
    } else {
        // Invalid password
    }
} else {
    // User not found
}
$conn->close();

?>
