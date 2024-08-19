<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $otp = $_POST['otp'];

    // Here, you should validate the user input and ensure data security.
    // You should also check if the provided OTP matches the generated OTP.

    

    $sql = "INSERT INTO users (username, number, password) VALUES ('$username', '$number', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>