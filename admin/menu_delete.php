<?php
include 'config.php';

if (isset($_GET['id'])) {
    $item_id = $_GET['id'];

    // Perform the deletion query
    $query = "DELETE FROM menuitems WHERE id = $item_id";

    if (mysqli_query($conn, $query)) {
        // Deletion was successful
        header('Location: menu_view.php'); // Redirect back to the menu page
        exit();
    } else {
        // Deletion failed
        echo 'Error: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo 'Invalid item ID.';
}
