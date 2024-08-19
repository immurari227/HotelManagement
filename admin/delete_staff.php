<?php
include 'config.php';

if (isset($_GET['aadhar'])) {
    $aadhar = $_GET['aadhar'];

    // Delete the staff record using the Aadhar number
    $sql = "DELETE FROM staff WHERE aadhar = '$aadhar'";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Redirect back to the staff view page after deletion
    header("Location: totalstaff.php");
    exit();
}
?>
