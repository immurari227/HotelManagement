<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--- Awesome Font link --->
    <script src="https://kit.fontawesome.com/1711676806.js" crossorigin="anonymous"></script>
    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!--- JavaScript --->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    




    <?php
    include 'config.php';
    ?>
</head>

<body>

    <header>
        <!--- nav start --->
        <div class="container p-0 mb-5">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="./images/logo.png" alt="Logo" class="d-inline-block align-text-top logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="menu.php">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="gallery.php">Gallery</a>
                            </li>
                            <!--- Drop Down --->
                            <li class="nav-item dropdown text-white bg-dark">
                                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                    Product
                                </a>
                                <ul class="dropdown-menu text-white bg-dark rounded border-dark" aria-labelledby=" navbarDropdown">
                                    <li class="nav-item"><a class="nav-link dropdown-item text-white bg-dark" href="#">Product</a></li>
                                    <li>
                                        <hr class="fw-bold">
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-item text-white bg-dark " href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
                                    <li class="nav-item"><a class="nav-link dropdown-item text-white bg-dark" href="#"><i class="fa fa-cutlery" aria-hidden="true"></i> Order</a></li>
                                </ul>
                            </li>
                            <!--- Sign in Form Code start--->
                            <li class="nav-item">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" id="signInDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-user-o" aria-hidden="true"></i> Booking
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-1 mx-1" aria-labelledby="signInDropdown">
                                            <div class="container-fluid bg-dark text-white">
                                                <form method="POST" action="user.php">
                                                    <div class="mb-3 ">
                                                        <label for="name" class="form-label">Name</label>
                                                        <input type="text" class="form-control bg-dark text-white" id="username" name="username">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="number" class="form-label">Number</label>
                                                        <input type="number" class="form-control bg-dark text-white" name="number">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="number" class="form-label">Tabel No</label>
                                                        <input type="number" class="form-control bg-dark text-white" name="tabel">
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class=" text-center btn btn-success btn-sm mb-1" id="btnLogin">SignUp</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!--- Sign in Form Code End--->


                        </ul>

                    </div>
                </div>
            </nav>
            <!--- nav end--->

            <!--- Hero strat--->
            <div class="container-xxl position-relative p-0 ">
                <div class="container-xxl py-5 bg-dark  mb-md-5 mb-lg-5 ">
                    <div class="container my-5 py-5 py-sm-0 mb-md-5 ">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-6 text-center text-lg-start">
                                <h1 class="display-3 text-white animated slideInLeft">Enjoy
                                    Our<br>Delicious Meal</h1>
                                <p class="text-white animated slideInLeft mb-4 mb-2">Tempor
                                    erat elitr rebum at clita.
                                    Diam dolor diam ipsum sit. Aliqu diam
                                    amet diam et eos. Clita erat ipsum et
                                    lorem et
                                    sit, sed stet lorem sit clita duo justo
                                    magna dolore erat amet</p>
                                <a href="menu.php" class="animated slideInLeft order-btn">Order Now</a>
                            </div>
                            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                                <img class="img-fluid" id="header-img" src="./images/hero.png" alt="fg" style="width: 500px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- Hero End--->
    </header>