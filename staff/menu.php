<?php
include 'header.php';
?>
<!--- here for add new Menu Start --->
<div class="container">
    <div class="card">
        <h2 class="text-dark fw-bold p-2 card text-center">Add New Menu </h2>

        <form action="menu_add.php" method="post" class="card-body" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="section" class="form-label fw-bold">Section:</label>
                <input type="text" name="section" required class="form-control">
            </div>
            <div class="mb-3">
                <label for="item_name" class="form-label fw-bold">Item Name:</label>
                <input type="text" name="item_name" required class="form-control">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label fw-bold">Image:</label>
                <input type="file" name="image" accept="image/*" required class="form-control">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label fw-bold">Price:</label>
                <input type="number" name="price" step="0.01" required class="form-control">
            </div>
            <div class="mb-3  text-center">
                <input type="submit" value="Add Item" class="btn btn-success px-3 fw-bold text-center">
            </div>
        </form>
    </div>
</div>
<!--- here for add new Menu End--->

<?php
include 'footer.php';
?>