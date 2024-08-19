<?php
session_start(); // Start the session

include 'config.php';


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Assuming you have a MySQL database connection in config.php
    include 'config.php';

    $itemName = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];

    // Insert item into the user's cart in the database
    $sql = "INSERT INTO cart (item_name, item_price) VALUES ('$itemName', '$itemPrice')";

    if ($conn->query($sql) === TRUE) {
        echo 'Item added to the cart';
    } else {
        echo 'Error adding item to the cart: ' . $conn->error;
    }

    $conn->close();
}
?>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<script src="js/script.js"></script>

</body>

</html>