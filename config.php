<?php
$servername = "localhost";
$username = "root";
$password = "Siddhesh@000";
$dbname = "blood_bank_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
