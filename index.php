<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!--FONT AWESOME ICON-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>Odyssey Resort- Home</title>
</head>

<body>
    <section id="navbar-area">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mx-auto" href="index.php">Odyssey Resort</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallary.php">Gallary</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Guest Rooms<i class="fa-solid fa-caret-down" style="padding-left: 7px"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="one-bedroom-suite.php">One-Bedroom Suite</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="two-bedroom-suite.php">Two-Bedroom Suite</a>
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
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-container" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-container" data-bs-slide="next">
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

    <section id="about-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-image">
                        <img src="images/home.jpg" alt="image" />
                    </div>
                </div>
                <div class="col-lg-7 about-text-content">
                    <div class="about-text">
                        <h5>
                            "Discover a resort that defines a new dimension of luxury."
                        </h5>
                        <h1>Welcome to <span>Odyssey Resort</span></h1>
                        <p>
                            Odyssey Resort embracing a rich green landscape surrounded by
                            exotic natural rain forest is just an hour drive from the
                            capital city-Dhaka, is the perfect place to rediscover oneself
                            in the idyllic bliss of scenic natural beauty away from the
                            hustle and bustle of the city life..
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="amenities" class="amenities-container">
        <div class="container-fluid">
            <h2>Our <span>Amenities</span></h2>
            <div class="row g-3">
                <div class="col-md-4 col-sm-6">
                    <div class="amenities-content">
                        <div class="amen-img">
                            <img src="images/amenities-1.jpg" alt="images">
                        </div>
                        <div class="amenities-content-info">
                            <h5><i class="fas fa-swimming-pool"></i>
                                <span>Swimming pool</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="amenities-content">
                        <div class="amen-img">
                            <img src="images/amenities-2.jpeg" alt="images">
                        </div>
                        <div class="amenities-content-info">
                            <h5><i class="fas fa-dumbbell"></i>
                                <span>Gym</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="amenities-content">
                        <div class="amen-img">
                            <img src="images/amenities-3.jpg" alt="images">
                        </div>
                        <div class="amenities-content-info">
                            <h5><i class="fas fa-microphone"></i>
                                <span>Conference room</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="amenities-content">
                        <div class="amen-img">
                            <img src="images/amenities-4.jfif" alt="images">
                        </div>
                        <div class="amenities-content-info">
                            <h5><i class="fa-solid fa-person-biking"></i></i>
                                <span>Cycling</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="amenities-content">
                        <div class="amen-img">
                            <img src="images/amenities-5.jpg" alt="images">
                        </div>
                        <div class="amenities-content-info">
                            <h5><i class="fas fa-ship"></i>
                                <span>Boat Tours</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="amenities-content">
                        <div class="amen-img">
                            <img src="images/amenities-6.jpg" alt="images">
                        </div>
                        <div class="amenities-content-info">
                            <h5><i class="fa-solid fa-film"></i>
                                <span>Cinema Hall</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="guest-room" class="guest-room-container">
        <div class="container-fluid">
            <h2>Our <span>Guest Rooms</span></h2>
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="guest-room-content">
                        <div class="hover-content">
                            <button type="button" class="btn learn-btn"><a href="one-bedroom-suite.php">Learn More</a></button>
                        </div>
                        <div class="room-img">
                            <img src="images/one-bedroom.jfif" alt="images">
                        </div>
                        <div class="room-content-info">
                            <h3> One-Bedroom Suite </h3>
                            <h6><i class="fa-solid fa-bed"></i><span>2 Adults Per Room</span></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="guest-room-content">
                        <div class="hover-content">
                            <button type="button" class="btn learn-btn"><a href="two-bedroom-suite.php">Learn More</a></button>
                        </div>
                        <div class="room-img">
                            <img src="images/two-bedroom.jfif" alt="images">
                        </div>
                        <div class="room-content-info">
                            <h3> Two-Bedroom Suite </h3>
                            <h6><i class="fa-solid fa-bed"></i><span>4 Adults Per Room</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="restaurants" class="restaurants-container">
        <div class="container-fluid">
            <h2>Our <span>Restaurant</span></h2>
            <div class="row">
                <div class="col-xl-6">
                    <div class="restro-image">
                        <img src="images/restaurants.jpg" alt="restro_image">
                    </div>
                </div>
                <div class="col-xl-6 restro-text-container">
                    <div class="restro-text">
                        <p>
                            The lounge and restaurant will be open seven days a week. We will offer special theme nights to attract
                            new
                            customers to Gabri's. The restaurant will be fine dining in a cozy atmosphere. Warm colors, fresh flowers,
                            soft music, candles and amazing artwork from some of the areas most notable new artists. This will
                            contribute to a sense of community and give new artists a chance to show their work for a diverse
                            clientele.
                            During the busy summer months you can also sit outside on our patio and we will offer a special summer
                            menu,
                            featuring lighter fare, exotic drinks, as well as non-alcoholic offerings. The patio and garden setting
                            will
                            be a fun and casual atmosphere for the summer crowd.
                        </p>

                        <p>
                            The service will be relaxed, very friendly and correct. We will hire the best people available, training,
                            motivating and encourage them, and thereby retaining the friendliest most efficient staff possible. Our
                            management team is comprised of individuals whose backgrounds consist of 50 years experience in food,
                            restaurant and hotel, catering, management, finance, marketing, art and motion pictures.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallary" class="gallary-container">
        <h2> Photo <span>Gallery</span></h2>
        <div class="container-fluid">
            <div class="row g-4 mt-3">
                <div class="col-md-4 col-sm-6">
                    <div class="gallary-content">
                        <img src="images/gallary-1.jpg" alt="gallary-images-showcase">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallary-content">
                        <img src="images/gallary-3.jpg" alt="gallary-images-showcase">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallary-content">
                        <img src="images/gallary-4.jpg" alt="gallary-images-showcase">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallary-content">
                        <img src="images/gallary-2.jpg" alt="gallary-images-showcase">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallary-content">
                        <img src="images/gallary-5.jpg" alt="gallary-images-showcase">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallary-content">
                        <img src="images/gallary-6.jpg" alt="gallary-images-showcase">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="banner" class="banner-container">
        <div class="container-fluid">
            <div class="bg-image banner-content" style="background-image: url('images/banner-bg.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      min-height: 600px;
      height: auto;">
                <h2>Start Your Journey</h2>
                <button type="button" class="btn custom-btn"><a href="booking.php" target="_blank">Book Now</a></button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>