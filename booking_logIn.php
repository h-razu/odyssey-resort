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

    <?php
    session_start();
    $guest = $_SESSION['guest_id'];

    $name = $email = "";

    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "Odyssey";

    $connection = mysqli_connect($server_name, $user_name, $password, $db_name);
    $q = "Select * from guests where Guest_ID = '$guest' ";
    $result = mysqli_query($connection, $q);

    if (mysqli_num_rows($result)) {

        while ($r = mysqli_fetch_assoc($result)) {
            $name = $r['Names'];
            $email = $r['Email'];
        }
    }
    mysqli_close($connection);
    ?>

    <?php
    $room_name = array();
    $room_capacity = array();
    $room_price = array();
    $room_avail = array();
    $all_room = array();

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
            $all_room[] = $r['total_room'];
        }
    }
    mysqli_close($connection3);
    ?>

    <section id="navbar-area">
        <nav class="navbar navbar-expand-sm fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Odyssey Resort</a>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 booking-dropdown">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <h5>
                                <?php echo $name; ?>
                            </h5>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <?php
    //for booking
    if (isset($_POST["booking_confirm"])) {

        $check_in = $check_out = $total_rm = $total_guest = $total_sum = "";
        if (isset($_POST["booking_confirm"])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $check_in = $_POST["chk_in_date"];
                $check_out = $_POST["chk_out_date"];
                $total_rm = $_POST["total_rooms"];
                $total_guest = $_POST["guest_no"];
                $total_sum = $_POST["total"];
            }
        }

        if (!empty($check_in) && !empty($check_out) && !empty($total_rm) && !empty($total_guest)) {

            $booking_number = rand(10000, 100000);
            $book_date = date("Y-m-d");
            $type_1=$room_name[0];

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

            $query = "CREATE TABLE IF NOT EXISTS Booking
            (
                Booking_ID int UNIQUE,  
                Guest_ID int,
                Villa_Type varchar(30),
                Check_in_date date,
                Check_out_date date,
                Booking_date date,
                Total_rooms int,
                guest_no int,
                Total_Amount int
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
            $value = "INSERT INTO Booking (Booking_ID, Guest_ID, Villa_Type, Check_in_date, Check_out_date, Booking_date, Total_rooms, guest_no, Total_Amount) VALUES 
            ('$booking_number','$guest','$type_1', '$check_in','$check_out', '$book_date', '$total_rm','$total_guest','$total_sum' )";

            if (mysqli_query($connection1, $value)) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>
                        <?php echo "<span class=\"success\">Booking Successful....</span>"; ?>
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

            $avl_room = $room_avail[0] - $total_rm;
            $total_bk = $all_room[0] - $avl_room;

            $qu = "UPDATE room_info SET avaiable_room='$avl_room', booked_room='$total_bk' WHERE name='$room_name[0]'";

            if (mysqli_query($connection1, $qu)) {
                echo "<meta http-equiv='refresh' content='0'>";
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


    <?php
    //for booking 
    if (isset($_POST["booking_confirm_two"])) {

        $check_in_2 = $check_out_2 = $total_rm_2 = $total_guest_2 = $total_sum_2 = "";
        if (isset($_POST["booking_confirm_two"])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $check_in_2 = $_POST["chk_in"];
                $check_out_2 = $_POST["chk_out"];
                $total_rm_2 = $_POST["total_rooms_two"];
                $total_guest_2 = $_POST["guest_two"];
                $total_sum_2 = $_POST["total_two"];
            }
        }

        if (!empty($check_in_2) && !empty($check_out_2) && !empty($total_rm_2) && !empty($total_guest_2)) {

            $booking_number_2 = rand(10000, 100000);
            $book_date_2 = date("Y-m-d");
            $type = $room_name[1];

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

            $query = "CREATE TABLE IF NOT EXISTS Booking
            (
                Booking_ID int UNIQUE,  
                Guest_ID int,
                Villa_Type varchar(30),
                Check_in_date date,
                Check_out_date date,
                Booking_date date,
                Total_rooms int,
                guest_no int,
                Total_Amount int
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
            $value = "INSERT INTO Booking (Booking_ID, Guest_ID, Villa_Type, Check_in_date, Check_out_date, Booking_date, Total_rooms, guest_no, Total_Amount) VALUES 
            ('$booking_number_2','$guest','$type', '$check_in_2','$check_out_2', '$book_date_2', '$total_rm_2','$total_guest_2','$total_sum_2' )";

            if (mysqli_query($connection1, $value)) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>
                        <?php echo "<span class=\"success\">Booking Successful....</span>"; ?>
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

            $avl_room_2 = $room_avail[1] - $total_rm_2;
            $total_bk_2 = $all_room[1] - $avl_room_2;

            $qu = "UPDATE room_info SET avaiable_room='$avl_room_2', booked_room='$total_bk_2' WHERE name='$room_name[1]'";

            if (mysqli_query($connection1, $qu)) {
                echo "<meta http-equiv='refresh' content='0'>";
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

    <div class="modal fade" id="booking_modal_one" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <?php echo $room_name[0]; ?>
                    </h5>
                    <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <form method="POST" class="row g-3">
                                <div class="col-lg-6">
                                    <label for="check-in" class="form-label">Check-In </label>
                                    <input type="date" name="chk_in_date" class="form-control" id="check-in" required />
                                </div>
                                <div class="col-lg-6">
                                    <label for="check-out" class="form-label">Check-Out</label>
                                    <input type="date" name="chk_out_date" class="form-control" id="check-out" required />
                                </div>
                                <div class="col-lg-6">
                                    <label for="howManyRooms" class="form-label">Rooms: </label>
                                    <input type="number" name="total_rooms" class="form-control" min="1" max=<?php echo $room_avail[0]; ?> id="howManyRooms" required onkeyup="total_one(this.value);" />
                                </div>
                                <div class="col-lg-6">
                                    <label for="howMany" class="form-label">Guest </label>
                                    <input type="number" name="guest_no" class="form-control" id="howMany" min="1" placeholder="Number of Guest" required />
                                </div>
                                <div class="col-lg-6 mb-3 fs-2 mt-3">
                                    <label class="form-label">Total: </label>
                                    <input type="number" name="total" id="totalSum_one" readonly>
                                </div>
                                <div class="text-center my-1">
                                    <button class="btn btn-dark" name="booking_confirm">Confirm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="booking_modal_two" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <?php echo $room_name[1]; ?>
                    </h5>
                    <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <form method="POST" class="row g-3">
                                <div class="col-lg-6">
                                    <label for="check-in" class="form-label">Check-In </label>
                                    <input type="date" name="chk_in" class="form-control" id="check-in" required />
                                </div>
                                <div class="col-lg-6">
                                    <label for="check-out" class="form-label">Check-Out</label>
                                    <input type="date" name="chk_out" class="form-control" id="check-out" required />
                                </div>
                                <div class="col-lg-6">
                                    <label for="howManyRooms" class="form-label">Rooms: </label>
                                    <input type="number" name="total_rooms_two" class="form-control" min="1" max=<?php echo $room_avail[1]; ?> id="howManyRooms" required onkeyup="total_twos(this.value);" />
                                </div>
                                <div class="col-lg-6">
                                    <label for="howMany" class="form-label">Guest </label>
                                    <input type="number" name="guest_two" class="form-control" id="howMany" min="1" placeholder="Number of Guest" required />
                                </div>
                                <div class="col-lg-6 mb-3 fs-2 mt-3">
                                    <label class="form-label">Total: </label>
                                    <input type="number" name="total_two" id="totalSum_two" readonly>
                                </div>
                                <div class="text-center my-1">
                                    <button class="btn btn-dark" name="booking_confirm_two">Confirm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

                                    <?php
                                    if ($room_avail[0] <= 0) {
                                    ?>
                                        <button type="button" class="btn btn-outline-info modal-button mx-md-1 disabled" data-bs-toggle="modal" data-bs-target="#booking_modal_one">
                                            Choose
                                        </button>
                                    <?php
                                    } else {
                                    ?>
                                        <button type="button" class="btn btn-outline-info modal-button mx-md-1" data-bs-toggle="modal" data-bs-target="#booking_modal_one">
                                            Choose
                                        </button>
                                    <?php
                                    }
                                    ?>

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
                                    <?php
                                    if ($room_avail[1] <= 0) {
                                    ?>
                                        <button type="button" class="btn btn-outline-info modal-button mx-md-1 disabled" data-bs-toggle="modal" data-bs-target="#booking_modal_two">
                                            Choose
                                        </button>
                                    <?php
                                    } else {
                                    ?>
                                        <button type="button" class="btn btn-outline-info modal-button mx-md-1" data-bs-toggle="modal" data-bs-target="#booking_modal_two">
                                            Choose
                                        </button>
                                    <?php
                                    }
                                    ?>
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

    <script>
        function total_one(value) {
            var x;
            x = <?php echo $room_price[0] ?> * value;

            document.getElementById('totalSum_one').value = x;
        }

        function total_twos(value) {
            var y;
            y = <?php echo $room_price[1] ?> * value;

            document.getElementById('totalSum_two').value = y;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>