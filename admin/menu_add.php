<?php
include 'config.php';

// Handle the form submission
if (isset($_POST['section']) && isset($_POST['item_name']) && isset($_POST['price'])) {
$section = $_POST['section'];
$item_name = $_POST['item_name'];
$price = floatval($_POST['price']);

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'uploads/' . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'], $folder);
// Insert the data into the database
$query = "INSERT INTO menuitems (section, item_name, image, price) VALUES ('$section', '$item_name', '$folder', $price)";

if (mysqli_query($conn, $query)) {
echo "Menu item added successfully.";
} else {
echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
}

// Close the database connection
mysqli_close($conn);
