<?php
include 'config.php';

$name = $_POST['name'];
$blood_group = $_POST['blood_group'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];

$insertUser = "INSERT INTO donor (name, blood_group, age, phone, quantity, address) 
               VALUES ('$name', '$blood_group', $age, '$phone', $quantity, '$address')";

if ($conn->query($insertUser) === TRUE) {
    $donor_id = $conn->insert_id;

    $insertHistory = "INSERT INTO donation_history (donor_id, blood_group, quantity) 
                      VALUES ($donor_id, '$blood_group', $quantity)";
    $conn->query($insertHistory);

    $updateStock = "UPDATE blood_stock SET available_units = available_units + $quantity 
                    WHERE blood_group = '$blood_group'";
    $conn->query($updateStock);

    echo "✅ Donation submitted successfully!";
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
