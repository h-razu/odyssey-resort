<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--BOOTSTRAP 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!--FONT AWESOME ICON-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>Odyssey Resort- Two-Bedroom Suite</title>
</head>

<body>
    <section id="navbar-area">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mx-auto" href="index.php">Odyssey Resort</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallary.php">Gallary</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Guest Rooms<i class="fa-solid fa-caret-down" style="padding-left: 7px"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="one-bedroom-suite.php">One-Bedroom Suite</a>
                                </li>
                                <li>
                                    <a class="dropdown-item active" href="two-bedroom-suite.php">Two-Bedroom Suite</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Aboust Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <button type="button" class="btn custom-btn">
                    <a href="booking.php" target="_blank">Book Now</a>
                </button>
            </div>
        </nav>
    </section>

    <section id="carousel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div id="carousel-container" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/carousal-img-1.png" alt="slide image-01" />
                            </div>
                            <div class="carousel-item">
                                <img src="images/carousal-img-2.png" alt="slide image-02" />
                            </div>
                            <div class="carousel-item">
                                <img src="images/carousal-img-3.png" alt="slide image-03" />
                            </div>
                            <div class="carousel-item">
                                <img src="images/carousal-img-4.png" alt="slide image-04" />
                            </div>
                            <div class="carousel-item">
                                <img src="images/carousal-img-5.png" alt="slide image-05" />
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-container"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-container"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="check-available">
        <div class="container-fluid">
            <div class="chk-avail-container">
                <div class="container-fluid">
                    <form class="row form-content">
                        <div class="col-lg-3 col-md-4">
                            <div class="content">
                                <label for="check-in" class="form-label">Check-In </label>
                                <input type="date" class="form-control" id="check-in" required />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="content">
                                <label for="check-out" class="form-label">Check-Out</label>
                                <input type="date" class="form-control" id="check-out" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="content">
                                <label for="howMany" class="form-label">Guest </label>
                                <input type="number" class="form-control" id="howMany" placeholder="Number of Guest" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mx-auto">
                            <div class="content">
                            <a href="booking.php" target="_blank">
                                    <button class="btn custom-form-btn" type="submit">
                                        SEARCH
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="one-bedroom-suite" class="one-bedroom-suite-container">
        <div class="container-fluid">
            <h1>Two-Bedroom Suite</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="one-bedroom-carousel">
                        <div id="carousel-container-two-bed" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carousel-container" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carousel-container" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carousel-container" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carousel-container" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carousel-container" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active obs-image-content">
                                    <img src="images/two-1.jfif" alt="slide image-01" />
                                </div>
                                <div class="carousel-item ob-image-content">
                                    <img src="images/two-2.jfif" alt="slide image-02" />
                                </div>
                                <div class="carousel-item obs-image-content">
                                    <img src="images/two-3.jfif" alt="slide image-03" />
                                </div>
                                <div class="carousel-item obs-image-content">
                                    <img src="images/two-4.jfif" alt="slide image-04" />
                                </div>
                                <div class="carousel-item obs-image-content">
                                    <img src="images/two-5.jfif" alt="slide image-05" />
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carousel-container-two-bed" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carousel-container-two-bed" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="suite-info">
                        <h4>Room Capacity</h4>
                        <h6>
                            <i class="fa-solid fa-bed"></i><span>4 Adult(s) / Room</span>
                        </h6>
                        <h3>Amenities & Service</h3>
                        <ul>
                            <li><i class="fa-solid fa-angles-right"></i><span>24 Hours Room Service</span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>50” Smart TV</span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>King Size Bed</span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>Living Room</span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>Family Bathtub</span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>Twin Beds</span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>Eco-Friendly Guest Amenities</span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>2 supreme well decorated spaces balconies
                                    with sitting facility</span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>Electronic Safe</span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>Tea & Coffee making Facility</span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>Free Wi-Fi Internet
                                    Access(Unlimited)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="Footer" class="Footer-container">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="footer-content-container">
                        <h2><a href="index.php">Odyssey Resort</a></h2>
                        <div class="footer-content-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-content-container">
                        <h4>Quick Links</h4>
                        <div class="footer-content-links">
                            <a href="index.php">Home <span>&#62;</span></a>
                            <a href="gallary.php">Gallary <span>&#62;</span></a>
                            <a href="about.php">About Us <span>&#62;</span></a>
                            <a href="contact.php">Contact <span>&#62;</span></a>
                            <a href="booking.php" target="_blank">Book Now <span>&#62;</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-content-container">
                        <h4> Our Address</h4>
                        <div class="footer-content-address">
                            <p> <i class="fas fa-map"></i> Gazipur, Dhaka, Bangladesh</p>
                            <p> <i class="fas fa-phone"></i> +999666333 </p>
                            <p> <i class="fas fa-envelope"></i> odyssey@gmail.com </p>
                            <p> <i class="fas fa-clock"></i> 7:00am - 10:00pm </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>