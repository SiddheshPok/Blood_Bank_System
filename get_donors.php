<?php
include 'config.php';

$blood_group = $_GET['blood_group'];

$sql = "SELECT name, blood_group, age, phone FROM donor WHERE blood_group = '$blood_group'";
$result = $conn->query($sql);

$donors = [];

while ($row = $result->fetch_assoc()) {
    $donors[] = $row;
}

header('Content-Type: application/json');
echo json_encode($donors);

$conn->close();
?>
