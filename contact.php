<?php
include 'header.php'
?>
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
<?php
include 'footer.php'
?>