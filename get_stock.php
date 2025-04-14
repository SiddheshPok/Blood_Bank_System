<?php
include 'config.php';

$blood_group = $_GET['blood_group'];

$sql = "SELECT available_units FROM blood_stock WHERE blood_group = '$blood_group'";
$result = $conn->query($sql);

if ($row = $result->fetch_assoc()) {
    echo $row['available_units'];
} else {
    echo "0";
}

$conn->close();
?>
get_stock