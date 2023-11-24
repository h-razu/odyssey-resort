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
  <title>Odyssey Resort- Booking</title>
</head>

<body>

  <section id="navbar-area">
    <nav class="navbar navbar-expand-md fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mx-auto" href="index.php">Odyssey Resort</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <div class="modal-button-container ms-auto">
            <div>
              <button type="button" class="btn btn-outline-info modal-button mx-md-1" data-bs-toggle="modal" data-bs-target="#login">
                Login
              </button>
            </div>
            <div>
              <button type="button" class="btn btn-outline-info modal-button mx-md-1" data-bs-toggle="modal" data-bs-target="#register">
                Register
              </button>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </section>

  <?php
  $log_email = $log_password = $reg_name = $reg_mobile = $reg_email = $reg_password = "";
  //for registration value
  if (isset($_POST["reg_submit"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $reg_name = test_input($_POST["reg_nm"]);
      $reg_mobile = test_input($_POST["reg_phn"]);
      $reg_email = test_input($_POST["reg_mail"]);
      $reg_password = test_input($_POST["reg_pass"]);
    }
  }

  //for login
  if (isset($_POST["log_button"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $log_email = test_input($_POST["log_mail"]);
      $log_password = test_input($_POST["log_pass"]);
    }
    //DATABASE connection
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "Odyssey";

    $connection2 = mysqli_connect($server_name, $user_name, $password, $db_name);
    $query = "Select *from Guests where Email= '$log_email' && Passwords='$log_password'";
    $res = mysqli_query($connection2, $query);

    if (mysqli_num_rows($res)) {
      while ($rs = mysqli_fetch_assoc($res)) {
        $guest = $rs['Guest_ID'];
      }
      session_start();
      $_SESSION['guest_id']=$guest;

      header("Location:booking_logIn.php");
      exit();
    } else {
  ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>
          <?php echo "<span class=\"warning\">No User Found </span>"; ?>
        </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  <?php

    }
    mysqli_close($connection2);
  }

  function test_input($data)
  {
    $data = trim($data);
    return $data;
  }
  ?>

  <!--log in modal-->
  <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="fa-solid fa-user fs-4 me-2"></i> User Login
          </h5>
          <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" name="log_mail" class="form-control" required>
            </div>
            <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" name="log_pass" class="form-control" required>
            </div>
            <div>
              <button class="btn btn-dark" name="log_button">LOGIN</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--registration modal-->
  <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="fa-solid fa-user fs-4 me-2"></i> User Registration
          </h5>
          <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <form method="POST" class="row g-3">
                <div class="col-lg-6">
                  <label class="form-label">Full Name</label>
                  <input type="text" class="form-control" name="reg_nm" required>
                </div>
                <div class="col-lg-6">
                  <label class="form-label">Mobile No.</label>
                  <input type="number" class="form-control" name="reg_phn" required>
                </div>
                <div class="col-lg-6">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" name="reg_mail" required>
                </div>
                <div class="col-lg-6 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="reg_pass" required>
                </div>
                <div class="text-center my-1">
                  <button class="btn btn-dark" name="reg_submit">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  //for registration
  if (isset($_POST["reg_submit"])) {
    if (!empty($reg_name) && !empty($reg_mobile) && !empty($reg_email) && !empty($reg_password)) {

      $guest_number = rand(1000, 10000);

      $server_name = "localhost";
      $user_name = "root";
      $password = "";

      $connection = mysqli_connect($server_name, $user_name, $password);

      if (!$connection) {
        die("Error: " . mysqli_connect_error());
      }

      $db = "CREATE DATABASE IF NOT EXISTS Odyssey";

      if (mysqli_query($connection, $db)) {
      } else {

  ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>
            <?php echo ("<span class=\"warning\">Error: " . mysqli_error($connection) . "</span>"); ?>
          </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php

      }
      mysqli_close($connection);

      //TABLE creation
      $db_name = "Odyssey";

      $connection1 = mysqli_connect($server_name, $user_name, $password, $db_name);

      $query = "CREATE TABLE IF NOT EXISTS Guests
      (
        Guest_ID int UNIQUE,
        Names varchar(30),
        Email varchar(50) UNIQUE,
        Mobile varchar(15),
        Passwords varchar(20)
      )";

      if (mysqli_query($connection1, $query)) {
      } else {

      ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>
            <?php echo ("<span class=\"warning\">Error: " . mysqli_error($connection1)) . "</span>"; ?>
          </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php

      }
      //insert into table
      $value = "INSERT INTO Guests (Guest_ID, Names, Email, Mobile, Passwords) VALUES ('$guest_number','$reg_name','$reg_email','$reg_mobile','$reg_password')";

      if (mysqli_query($connection1, $value)) {
      ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>
            <?php echo "<span class=\"success\">Registration Successful....</span>"; ?>
          </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php

      } else {
      ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>
            <?php echo "<span class=\"warning\">Error: " . mysqli_error($connection1) . "</span>"; ?>
          </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }

      mysqli_close($connection1);
    } else {
      ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>
          <?php echo "<span class=\"warning\"> can't proceed right now!!</span>"; ?>
        </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  <?php
    }
  }
  ?>

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
                <button class="btn custom-form-btn" type="submit">
                  SEARCH
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php
  $room_name = array();
  $room_capacity = array();
  $room_price = array();
  $room_avail = array();

  $server_name = "localhost";
  $user_name = "root";
  $password = "";
  $db_name = "Odyssey";

  $connection3 = mysqli_connect($server_name, $user_name, $password, $db_name);
  $q = "Select * from room_info";
  $result = mysqli_query($connection3, $q);

  if (mysqli_num_rows($result)) {

    while ($r = mysqli_fetch_assoc($result)) {
      $room_name[] = $r['name'];
      $room_capacity[] = $r['capacity'];
      $room_price[] = $r['price'];
      $room_avail[] = $r['avaiable_room'];
    }
  }
  mysqli_close($connection3);
  ?>

  <section id="booking-container">
    <div class="container-fluid">
      <div class="row g-3">
        <div class="col-lg-7">
          <div class="avail-room">
            <h3>Available Guest Rooms</h3>
            <div class="row my-3 avail-container">
              <div class="col-sm-4">
                <img src="images/one-bedroom.jfif" alt="one">
              </div>
              <div class="col-sm-8">
                <h2>
                  <?php echo $room_name[0]; ?>
                </h2>

                <div class="available-content">
                  <div class="room-cap">
                    <h6>Room Capacity</h6>
                    <h5>
                      <i class="fa-solid fa-bed"></i><span>
                        <?php echo $room_capacity[0]; ?>
                      </span>
                    </h5>
                  </div>
                  <div class="cost">
                    <h6>per room per night</h6>
                    <h3>
                      BDT <span>
                        <?php echo $room_price[0]; ?>
                      </span>
                    </h3>
                  </div>
                </div>
                <hr>
                <div class="choose-button">
                  <h4>
                    <?php echo $room_avail[0]; ?> Rooms Left
                  </h4>
                  <button type="button" class="btn btn-outline-info modal-button mx-md-1 disabled" data-bs-toggle="modal" data-bs-target="#register">
                    Choose
                  </button>
                </div>
              </div>
            </div>
            <div class="row my-3 avail-container">
              <div class="col-sm-4">
                <img src="images/two-bedroom.jfif" alt="two">
              </div>
              <div class="col-sm-8">
                <h2>
                  <?php echo $room_name[1]; ?>
                </h2>

                <div class="available-content">
                  <div class="room-cap">
                    <h6>Room Capacity</h6>
                    <h5>
                      <i class="fa-solid fa-bed"></i><span>
                        <?php echo $room_capacity[1]; ?>
                      </span>
                    </h5>
                  </div>
                  <div class="cost">
                    <h6>per room per night</h6>
                    <h3>
                      BDT <span>
                        <?php echo $room_price[1]; ?>
                      </span>
                    </h3>
                  </div>
                </div>
                <hr>
                <div class="choose-button">
                  <h4>
                    <?php echo $room_avail[1]; ?> Rooms Left
                  </h4>
                  <button type="button" class="btn btn-outline-info modal-button mx-md-1 disabled" data-bs-toggle="modal" data-bs-target="#register">
                    Choose
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="cancel-rules">
            <h3>Cancellation Policy</h3>
            <ul>
              <li><i class="fa-solid fa-angles-right"></i>
                <span>For any individual booking, Cancellation Notice must be given at-least 72 hours prior to
                  Arrival/Check-in date. During specific periods such as consecutive Government holidays, Eid-Ul-Fitr,
                  Eid-Ul-Azha, Christmas, Buddha Purnima, Bengali New Year, Durga Puja, New Year’s Eve etc.,
                  cancellation
                  notice must be given at-least 15 days prior to Arrival/Check-in date. Cancellation made after the
                  period
                  of notice OR No-Shows will be charged one full night's Room Tariff (of each room booked) with 15% VAT
                  and 10% Service Charge</span>
              </li>
              <li><i class="fa-solid fa-angles-right"></i>
                <span>For any Group Booking (Minimum 10 Rooms), Cancellation Notice must be given at least 10 days prior
                  to Arrival/Check-in date.</span>
              </li>
              <li><i class="fa-solid fa-angles-right"></i>
                <span>For above 10 Rooms, cancellation notice must be given at-least 25 days prior to Arrival/Check-in
                  date. During specific periods such as consecutive Government holidays, Eid-Ul-Fitr, Eid-Ul-Azha,
                  Christmas, Buddha Purnima, Bengali New Year, Durga Puja, New Year’s Eve etc., cancellation notice must
                  be given at-least 35 days prior to Arrival/Check-in date. Cancellation made after the period of notice
                  OR No-Shows we charge 50% of the total budget.</span>
              </li>
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
              <a href="booking.php">Book Now <span>&#62;</span></a>
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