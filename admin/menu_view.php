<?php
include 'header.php';
include 'config.php';

// Fetch and display menu items
$query = "SELECT * FROM menuitems";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $sections = array();
    echo '<div class="container menu-items">';
    echo '<div class="row">';
    echo '<h1 class="text-center half-line menu-heading text-white bg-dark mb-0 pb-3">Check Our Tasty Menu</h1>';

    while ($row = mysqli_fetch_assoc($result)) {
        $section = $row['section'];
        $image = $row['image'];
        $item_name = $row['item_name'];
        $price = $row['price'];
        $item_id = $row['id'];

        // Store menu items in sections
        $sections[$section][] = [
            'image' => $image,
            'item_name' => $item_name,
            'price' => $price,
            'id' => $item_id,
        ];
    }

    // Output two columns for sections
    $column1 = '';
    $column2 = '';
    $count = 0;

    foreach ($sections as $section => $items) {
        $column = ($count % 2 == 0) ? 'column1' : 'column2';

        ${$column} .= '<h2 class="text-white">' . $section . '</h2>';
        ${$column} .= '<hr class="text-white bg-dark mb-4" />';

        foreach ($items as $item) {
            ${$column} .= '<div class="row">';
            ${$column} .= '<div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center" style="width: 100px;">';
            ${$column} .= "<img src='./{$item['image']}' alt='{$item['item_name']}' class='img-fluid menu-list rounded-circle'>";
            ${$column} .= '</div>';
            ${$column} .= '<div class="col-lg-8 col-md-8 col-sm-12 col-12">';
            ${$column} .= '<div class="d-flex justify-content-between align-items-center item-info">';
            ${$column} .= '<div class="item-details">';
            ${$column} .= "<span class='item-name h5 text-muted'>{$item['item_name']}</span>";
            ${$column} .= '</div>';
            ${$column} .= "<button class='cart btn btn-dark' onclick=\"addToCart('{$item['item_name']}', {$item['price']})\"><span class='price fw-bold text-success h5'>₹" . number_format($item['price'], 2) . "</span><i class='fa fa-cart-plus cart-icon' aria-hidden='true'></i></button>";

            // Update and Delete buttons
            ${$column} .= '<div class="d-flex justify-content-between">';
            ${$column} .= "<a href='menu_delete.php?id={$item['id']}' class='btn btn-danger'>Delete</a>";
            ${$column} .= '</div>';

            ${$column} .= '</div>';
            ${$column} .= '</div>';
            ${$column} .= '</div>';
        }

        $count++;
    }

    // Output the two columns
    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center card bg-dark">';
    echo $column1;
    echo '</div>';
    echo '<div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center card bg-dark">';
    echo $column2;
    echo '</div>';

    echo '</div>';
    echo '</div>';
} else {
    echo 'No menu items found.';
}

// Close the database connection
mysqli_close($conn);

include 'footer.php';
