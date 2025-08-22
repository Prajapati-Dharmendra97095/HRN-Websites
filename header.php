<header class="shadow-lg sticky-top z-3">
    <nav class="navbar navbar-expand-md bg-white-50 backdrop-blur-3 py-3">
        <div class="container-fluid px-4 px-md-6 px-lg-8">
            <a class="navbar-brand py-2 me-0" href="#">
                <img src="assets/images/logo/logo.png" alt="HRN" class="img-fluid" style="width: 60%;">
            </a>

            <button class="navbar-toggler d-md-none p-2 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse  justify-content-center " id="navbarNav">
                <ul class="navbar-nav  mb-2 mb-lg-0 space-x-6 ">
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-medium" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-medium" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-medium" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-medium" href="contact.php">Contact Us</a>
                    </li>
                </ul>

            </div>
            <button class=" custom-btn fw-semibold px-4 py-2 d-none d-md-inline" id="openBtn">
                <span class="dot me-2"></span>Let's start
            </button>
        </div>
    </nav>
</header>

<div class="offcanvas offcanvas-end d-md-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header justify-content-end pb-0">
        <button type="button" class="btn-close text-reset p-2" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column">
        <ul class="navbar-nav flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link text-dark fs-5 fw-medium p-3" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fs-5 fw-medium p-3" href="services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fs-5 fw-medium p-3" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fs-5 fw-medium p-3" href="contact.php">Contact Us</a>
            </li>
        </ul>

        <div class="mt-auto pt-4 border-top border-2">
            <div class="d-flex justify-content-center space-x-6">
                <a href="#" class="text-secondary hover-red mx-3"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#" class="text-secondary hover-red mx-3"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="#" class="text-secondary hover-red mx-3"><i class="fab fa-linkedin fa-lg"></i></a>
            </div>
        </div>
    </div>
</div>



<section class="form-modal box" id="myBox">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="checkout-container">
                    <!-- <span>&times;</span> -->
                    <!-- <div class="box" id="myBox"> -->
                    <span class="close" id="formModalClose">&times;</span>
                    <!-- </div> -->

                    <h3>Registration Form</h3>

                    <form action="submit" method="post">

                        <!-- Full Name -->
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="name" class="form-control" placeholder="Enter Name" required>

                        <!-- Email -->
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email id" required>

                        <!-- Mobile -->
                        <label for="mobile"><i class="fa fa-mobile"></i> Mobile</label>
                        <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile Number" required>

                        <!-- City -->
                        <label for="city"><i class="fa fa-city"></i> City</label>
                        <input type="text" id="city" name="city" class="form-control" placeholder="City" required>

                        <!-- Submit -->
                        <input type="submit" value="Submit Now" class="btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        const openBtn = document.getElementById("openBtn");
        // Select the close button and the box
        const closeBtn = document.querySelector(".close");
        const box = document.querySelector("#myBox");

        openBtn.addEventListener("click", () => {
            box.classList.remove("hidden");
        });
        // When clicking the × button → hide the box
        closeBtn.addEventListener("click", () => {
            box.classList.add("hidden"); // hides
            // or use box.remove(); // removes from DOM
        });
    </script> -->
</section>