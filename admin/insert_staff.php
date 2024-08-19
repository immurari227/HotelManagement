<?php
include 'config.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $aadhar = $_POST['aadhar'];
    $pan = $_POST['pan'];
    $contact_number = $_POST['contact_number'];
    $hire_date = $_POST['hire_date'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];

    
    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'uploads/' . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'],$folder);

 
    // Insert data into the "staff" table
    $sql = "INSERT INTO staff (user_id, password, user_name, email, aadhar, pan, contact_number, hire_date, address, dob, image)
            VALUES ('$user_id', '$password', '$user_name', '$email', '$aadhar', '$pan', '$contact_number', '$hire_date', '$address', '$dob', '$folder')";

    if (mysqli_query($conn, $sql)) {
        echo "New staff record inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: staff.php");
    exit();
}
?>
