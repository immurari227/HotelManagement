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
                            <li class="nav-item">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" id="signInDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Sign In
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="signInDropdown">
                                            <div class="container-fluid">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Username</label>
                                                        <input type="text" class="form-control" id="username" name="username">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="password" class="form-control" id="password" name="password">
                                                    </div>
                                                    <button type="submit" class="btn btn-success btn-sm" id="btnLogin">Login</button>
                                                </form>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>

                            </li>



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
                                <a href="menu.php" class="animated slideInLeft order-btn">Check
                                    Menu</a>
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



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
    <script>
        // let popup =document.querySelector('.menu-items')
        // let html =    ` <div class="popup">
        //     <h1>Item added to cart Successfully</h1>
        //     </div>`
        //     popup.style.position = 'relative'
        //     popup.insertAdjacentHTML("afterend", html);
        //     let modal = document.querySelector('.popup')
        // Function to add an item to the cart
        function addToCart(itemName, itemPrice) {
            console.log(modal)
            // Create or retrieve a cart object from localStorage
            let cart = JSON.parse(localStorage.getItem("cart")) || [];

            // Add the selected item to the cart
            cart.push({
                name: itemName,
                price: itemPrice
            });

            // Store the updated cart in localStorage
            localStorage.setItem("cart", JSON.stringify(cart));

            modal.style.display = 'block'
            // Redirect to the cart page (cart.html)
            // window.location.href = "cart.html";
        }
    </script>

</body>

</html>
<!--- Footer End--->