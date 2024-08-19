<?php
include 'header.php'
?>

<!--- About Strat--->
<div class="container about-container">
    <div class="line"></div>
    <div class="container">
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="text-center half-line">About Us</h2>
                        <p>We are a cozy restaurant that offers the
                            finest cuisine. Our dishes are carefully
                            prepared using the freshest ingredients. Our
                            commitment is to deliver an unforgettable
                            dining experience to our customers.</p>
                        <p>We are a cozy restaurant that offers the
                            finest cuisine. Our dishes are carefully
                            prepared using the freshest ingredients. Our
                            commitment is to deliver an unforgettable
                            dining experience to our customers.</p>
                        <p>We are a cozy restaurant that offers the
                            finest cuisine. Our dishes are carefully
                            prepared using the freshest ingredients. Our
                            commitment is to deliver an unforgettable
                            dining experience to our customers.</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <img id="about-img" src="https://images.unsplash.com/photo-1552566626-52f8b828add9?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8cmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D" alt="Restaurant Interior">
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!--- About End--->

<!--- Menu Strat--->
<div class="container menu-items">
    <div class="row">
        <h1 class="text-center half-line menu-heading">Check Our Tasty
            Menu</h1>
        <div class="lines"></div>

        <!-- List 1 -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center card bg-dark">
            <h2>CHATORE</h2>
            <div class="line"></div>
            <div class="row">
                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/golgappa.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Gol
                                Gappa (6pc) </span>

                        </div>
                        <button class="cart btn btn-dark" onclick="addToCart('Gol Gappa (6pc)', 30.00)"><span class="price fw-bold text-success h5">
                                ₹30.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/dahigolgapa.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Dahi
                                Ke Gol Gappa (6pc)</span>

                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹50.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/bhalla.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Bhalla
                                Papdi</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹60.00
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/moogpataka.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Moong
                                Dal Bread Pataka</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹30.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/tikki.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Tikki</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹50.00
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/paobhaji.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Pao
                                Bhaji</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹80.00
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/aluchat.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Aalu
                                Chaat</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹60.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- List 2 -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center card bg-dark">
            <h2>DAKSHIN SE</h2>
            <div class="line"></div>
            <div class="row">
                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/plaindsa.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Plain
                                Dosa</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹80.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/masaldosa.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Masala
                                Dosa</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹90.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/ravadosa.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Rava
                                Dosa Plain</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹100.00
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/ravamasal.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Rava
                                Dosa Masala</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹120.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/idaly.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Idly
                                Sambhar (4pc)</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹80.00
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/sambharvada.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Sambhar
                                Vada (4pc)</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹80.00
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

            </div>
        </div>

        <!-- List 3 -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center card bg-dark">
            <h2>PAN ASIAN</h2>
            <div class="line"></div>
            <div class="row">
                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/hackanoodles.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Hakka
                                Noodles</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹100.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/friedrice.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Fried
                                Rice </span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹100.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/chilipanner.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Chilli
                                Paneer</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹150.00
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/vegmanchurian.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Veg
                                Manchurian</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹130.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/chilimushroom.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Chilli
                                Mushroom</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹170.00
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/chilibabycorn.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Chilli
                                Baby Corn</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹170.00
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

            </div>
        </div>

        <!-- List 4 -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center card bg-dark">
            <h2>MOMOS</h2>
            <div class="line"></div>
            <div class="row">
                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/streamoms.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Steam
                                Veg Momos</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹70.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/streamoms.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Steam
                                Paneer Momos</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹90.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/friedmoms.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Fried
                                Veg Momos</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹80.00
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/friedmoms.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Fried
                                Paneer Momos</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹100.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- List 5 -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center card bg-dark">
            <h2>BEVERAGES</h2>
            <div class="line"></div>
            <div class="row">
                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/kullerchai.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">KULLER CHAI</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹20.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/bratencoffee.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">bEATEN COFFEE</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹40.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/icetea.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">ICE TEA</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹70.00 </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/colddrink.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">COLD DRINK</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹ MRP</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/mrinalwater.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">MINERAL WATER</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹80.00 </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!--- List 6 --->
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center card bg-dark">
            <h2>SHAKES</h2>
            <div class="line"></div>
            <div class="row">
                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/coldcofffee.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">COLD COFFE</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹70.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/bananashake.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">BANANA SHAKE</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹70.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/straweberryshake.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">STRAWBERRY SHAKE</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹70.00 </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/mangoshake.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">MANGO SHAKES</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹ 70.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/oreoshake.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">OREO SHAKE</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹70.00 </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!--- List 7 --->
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center card bg-dark">
            <h2>PURANI DELHI SE</h2>
            <div class="line"></div>
            <div class="row">
                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/chholebhature.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">CHHOLE BHATURE</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹80.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/bedmipurialoo.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">BEDMI PURI ALOO</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹60.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!--- lisT 8 --->
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center card bg-dark">
            <h2>SOUPS</h2>
            <div class="line"></div>
            <div class="row">
                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/hotnsour.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">HOT N SOUR</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹60.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/sweetcorn.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">SWEET CORN</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹60.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!--- LisT 9 --->
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center card bg-dark">
            <h2>WRAPS, SANDWICHES,
                BURGERS, PIZZA & PASTA</h2>
            <h5>(ACCOMPANIED WITH FRIES)</h5>
            <div class="line"></div>
            <div class="row">
                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/vegburger.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Veg. Burger</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹80.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/grleedburger.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Grilled Sandwich</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹80.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/frenchfries.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">French Fries</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹60.00
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/cheezyfrenchfries.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Cheezy French Fries</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹80.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/vegpizza.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Veg. Pizza </span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹140.00
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/tandorivegpizza.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Tandoori Veg. Pizza</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹150.00
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/suprisedwraprool.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Surprise Wrap & Roll</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹80.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/garlicbread.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">Garlic Bread</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹100.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!--- List 10 --->
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center card bg-dark">
            <h2>DESSERTS</h2>
            <div class="line"></div>
            <div class="row">
                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/tillewalikulfi.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">TILLE WALI KULFI</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹40.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/kesarijalebi.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">KESARI JALEBI</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹50.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/moogalhalwa.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">MOONG DAL KA HALWA</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹60.00
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/gajarhalwa.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">GAJAR KA HALWA</span>
                        </div>
                        <button class="cart btn btn-dark"> <span class="price fw-bold text-success h5">
                                ₹60.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/icecream.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">ICE CREAM </span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹ MRP
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/chocolate.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">CHOCOLATE</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹ MRP
                            </span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!--- List 11 --->
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center card bg-dark">
            <h2>MOCKTAILS</h2>
            <div class="line"></div>
            <div class="row">
                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/mocktails.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">ALL FLAVORS</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹100.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>



        <!--- List 12 --->
        <!--- List 11 --->
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center card bg-dark">
            <h2>ASIAN BOWLS</h2>
            <div class="line"></div>
            <div class="row">

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/rajamachawal.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">RAJMA CHAWAL</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹100.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>

                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/cholechawal.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">CHOLE CHAWAL</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹100.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>
                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/noodleschilipaneer.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">NOODLES WITH VEG MANCHURIAN</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹120.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>
                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/noodleschilipaneer.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">NOODLES WITH CHILI PANEER</span>
                        </div>
                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹120.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>
                <!--- Items here -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <img src="./images/souththal.png" alt="image" class="img-fluid menu-list">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="d-flex justify-content-between align-items-center item-info">
                        <div class="item-details">
                            <span class="item-name h5 text-muted">SOUTH INDIAN THALI </span>
                            <br>
                            <small class="text-muted fw-semibold">SOUTH INDIAN THALI
                                (1 MINI DOSA, 1 VADA, 1 IDLY, RICE,
                                SAMBHAR, CHUTNEY & SWEET)</small>
                        </div>

                        <button class="cart btn btn-dark"><span class="price fw-bold text-success h5">
                                ₹120.00</span><i class="fa fa-cart-plus cart-icon" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- Menu End--->

<!---Testimonial Start--->
<div class="container">
    <h2 class="text-center mb-2 mt-md-5 mt-sm-2">What our customers say?</h2>
    <div class="line"></div>
    <div id="carouselExampleControls" class="carousel slide text-center" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="rounded-circle shadow-1-strong mb-4" src="https://i.pinimg.com/originals/77/9a/a2/779aa206f2d860cb79e3c0b2e5dfdbe6.jpg" alt="avatar" style="width: 150px;" />
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3">Maria Kate</h5>
                        <p>Photographer</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Minus et deleniti
                            nesciunt sint eligendi reprehenderit
                            reiciendis, quibusdam illo, beatae quia
                            fugit consequatur laudantium velit magnam
                            error. Consectetur distinctio fugit
                            doloremque.
                        </p>
                    </div>
                </div>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="far fa-star fa-sm"></i></li>
                </ul>
            </div>
            <div class="carousel-item">
                <img class="rounded-circle shadow-1-strong mb-4" src="https://i.pinimg.com/originals/77/9a/a2/779aa206f2d860cb79e3c0b2e5dfdbe6.jpg" alt="avatar" style="width: 150px;" />
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3">John Doe</h5>
                        <p>Web Developer</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Minus et deleniti
                            nesciunt sint eligendi reprehenderit
                            reiciendis.
                        </p>
                    </div>
                </div>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="far fa-star fa-sm"></i></li>
                </ul>
            </div>
            <div class="carousel-item">
                <img class="rounded-circle shadow-1-strong mb-4" src="https://i.pinimg.com/originals/77/9a/a2/779aa206f2d860cb79e3c0b2e5dfdbe6.jpg" alt="avatar" style="width: 150px;" />
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3">Anna Deynah</h5>
                        <p>UX Designer</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Minus et deleniti
                            nesciunt sint eligendi reprehenderit
                            reiciendis, quibusdam illo, beatae quia
                            fugit consequatur laudantium velit magnam
                            error. Consectetur distinctio fugit
                            doloremque.
                        </p>
                    </div>
                </div>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class "fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="far fa-star fa-sm"></i></li>
                </ul>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!---Testimonial End--->

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
                    <img src="./images/g4.jpg" alt="Appetizer 1">
                    <div class="overlay">
                        <p>Appetizer 1</p>
                    </div>
                </div>
            </div>
            <!-- Add more images with appropriate filters here -->
            <div class="col-md-3 col-sm-6 filter appetizers mb-4">
                <div class="image">
                    <img src="./images/g5.jpg" alt="Appetizer 1">
                    <div class="overlay">
                        <p>Appetizer 1</p>
                    </div>
                </div>
            </div>
            <!-- Add more images with appropriate filters here -->
            <div class="col-md-3 col-sm-6 filter appetizers mb-4">
                <div class="image">
                    <img src="./images/g6.webp" alt="Appetizer 1">
                    <div class="overlay">
                        <p>Appetizer 1</p>
                    </div>
                </div>
            </div>
            <!-- Add more images with appropriate filters here -->
            <div class="col-md-3 col-sm-6 filter appetizers mb-4">
                <div class="image">
                    <img src="./images/g7.webp" alt="Appetizer 1">
                    <div class="overlay">
                        <p>Appetizer 1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- Gallery End--->

<!--- Contact Start--->
<div class="container mt-5">
    <div class="row">
        <!-- Contact Form -->
        <div class="col-lg-6 col-md-6 col-sm-12  p-2">
            <h2>Contact Us</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control bg-dark" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control bg-dark" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control bg-dark text-white" id="message" name="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Contact Details -->
        <div class="col-lg-6 col-md-6 col-sm-12 ">
            <h2>Contact Details</h2>
            <div class="card bg-dark p-2">

                <address>
                    <h3 class="text-muted mb-md-3 mb-sm-2">
                        Let's get in touch
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Repellendus, omnis.</p>
                    <p><strong>Address:</strong> 123 Main Street, City,
                        Country</p>
                    <p><strong>Email:</strong> info@example.com</p>
                    <p><strong>Phone:</strong> +1 (123) 456-7890</p>
                    <p><strong>WhatsApp:</strong> +1 (123) 456-7890</p>
                </address>
                <div class="social-icons">
                    <a href="#" target="_blank" class="fab fa-youtube"></a>
                    <a href="#" target="_blank" class="fab fa-facebook"></a>
                    <a href="#" target="_blank" class="fab fa-twitter"></a>
                    <a href="#" target="_blank" class="fab fa-instagram"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- Contact End--->

<!--- Team Strat--->
<section class="team-section">
    <div class="container">
        <h1 class="text-center">Our Proffesional Chefs</h1>
        <p class="text-center">Lorem, ipsum dolor sit amet consectetur
            adipisicing elit. A, totam?</p>
        <div class="line"></div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="team-member">
                    <img src="https://img.freepik.com/free-photo/four-beautiful-girls-resting-party_176420-6201.jpg" alt="Team Member 1">
                    <div class="member-details bg-dark">
                        <h5>Om</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more team members here -->
            <div class="col-md-4 col-sm-12">
                <div class="team-member">
                    <img src="https://img.freepik.com/free-photo/four-beautiful-girls-resting-party_176420-6201.jpg" alt="Team Member 1">
                    <div class="member-details bg-dark">
                        <h5>Om</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="team-member">
                    <img src="https://img.freepik.com/free-photo/four-beautiful-girls-resting-party_176420-6201.jpg" alt="Team Member 1">
                    <div class="member-details bg-dark">
                        <h5>Om</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--- Team End--->

<?php
include 'footer.php'
?>