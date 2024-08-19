<?php
include 'header.php';
?>   
    <!--- Gallery Strat--->
    <div class="container">
        <h1 class="text-center mt-lg-5 mt-md-5 mt-sm-3">Our Restaurant
            Gallery</h1>
        <div id="filters" class="text-center">
            <div class="btn-group-custom mb-3 text-center">
                <button type="button" class="filter" data-filter="all">All</button>
                <button type="button" class="filter" data-filter="appetizers">Appetizers</button>
                <button type="button" class="filter" data-filter="entrees">Entrees</button>
                <button type="button" class="filter" data-filter="desserts">Desserts</button>
            </div>
            <div class="line"></div>
            <div id="image-container" class="row ">
                <div class="col-md-3 col-sm-6 filter appetizers mb-4">
                    <div class="image">
                        <img src="./images/g4.jpg"
                            alt="Appetizer 1">
                        <div class="overlay">
                            <p>Appetizer 1</p>
                        </div>
                    </div>
                </div>
                <!-- Add more images with appropriate filters here -->
                <div class="col-md-3 col-sm-6 filter appetizers mb-4">
                    <div class="image">
                        <img src="./images/g5.jpg"
                            alt="Appetizer 1">
                        <div class="overlay">
                            <p>Appetizer 1</p>
                        </div>
                    </div>
                </div>
                <!-- Add more images with appropriate filters here -->
                <div class="col-md-3 col-sm-6 filter appetizers mb-4">
                    <div class="image">
                        <img src="./images/g6.webp"
                            alt="Appetizer 1">
                        <div class="overlay">
                            <p>Appetizer 1</p>
                        </div>
                    </div>
                </div>
                <!-- Add more images with appropriate filters here -->
                <div class="col-md-3 col-sm-6 filter appetizers mb-4">
                    <div class="image">
                        <img src="./images/g7.webp"
                            alt="Appetizer 1">
                        <div class="overlay">
                            <p>Appetizer 1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- Gallery End--->
    <?php
    include 'footer.php';
    ?>