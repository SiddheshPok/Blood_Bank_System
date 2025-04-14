<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "Siddhesh@000", "blood_bank_system");

if ($conn->connect_error) {
    die("❌ Database connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $blood_group = $_POST['blood_group'];
    $unit_required = $_POST['unit_required'];
    $hospital = $_POST['hospital'];
    $contact = $_POST['contact'];
    $location = $_POST['location'];

    $sql = "INSERT INTO requests (name, blood_group, unit_required, hospital, contact, location)
            VALUES ('$name', '$blood_group', $unit_required, '$hospital', '$contact', '$location')";

    // ❌ REMOVE this debug line
    // echo "Running SQL: <br>$sql<br><br>";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Request submitted successfully!";
    } else {
        echo "❌ Error: " . $conn->error;
    }

    $conn->close();
} else {
    echo "⚠️ Not a POST request.";
}
?>
