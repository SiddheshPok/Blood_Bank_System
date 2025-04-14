<?php
include 'config.php';

$blood_group = $_GET['blood_group'];

$sql = "SELECT name, blood_group, unit_required, hospital, contact, location 
        FROM requests WHERE blood_group = '$blood_group'";

$result = $conn->query($sql);

$requests = [];

while ($row = $result->fetch_assoc()) {
    $requests[] = $row;
}

header('Content-Type: application/json');
echo json_encode($requests);

$conn->close();
?>
