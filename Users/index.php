<?php
session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: .././index.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: .././index.php");
  }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Travel | Home</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,700&display=swap" rel="stylesheet">
    <!-- Library CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <!-- Template CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="logo-spinner">

            </div>
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- End of Preloader -->
    <!-- Header -->
    <header class="header">
        <div class="base-header">
            <div class="header-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="topbar-left list-unstyled list-inline float-left">
                                <li class="language">
                                    <a href="index.php#" class="dropdown-text">
                                        <img alt=""><span>Travel</span>

                                    </a>

                                </li>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="topbar-right list-unstyled list-inline float-right">
                                <li class="topbar-login"><a href="Users\index.php"><i class="fas fa-user"></i><?php  if (isset($_SESSION['username'])) : ?>
                          <?php echo $_SESSION['username']; ?>
             <?php endif ?></a>
                                </li>
                                <li class="topbar-logout"><a href="../index.php"><i class="fas fa-user"></i>Logout</li><?php if (isset($_GET['logout'])) : ?>
              <?php endif ?></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-default header-style-1">
                <div class="container">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="brand-logo">
                               <div class="logo-white">
                                    <a href="index.php">

                                </a>
                               </div>
                               <div class="logo-black">
                                    <a href="index.php">
                                    <img src="../img/logo-1.png" alt="" class="img-fluid">
                                </a>
                               </div>
                            </div>

                            <nav class="navbar navbar-expand-lg float-right">
                                <ul class="navbar-nav">
                                    <li class="nav-item"> <a class="nav-link active" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" href="booking.php">Bookings</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" href="contact.php">contact</a>
                                   </li>
                                   <li class="nav-item"> <a class="nav-link" href="plane_details.php">Details</a>
                                  </li>
                                  </nav>

                        <!-- Nav Mobile -->
                        <div class="navigation-mobile">
                            <div class="icon-nav-mobile-open"> <i class="fas fa-bars"></i>
                            </div>
                            <nav class="navbar for-mobile">
                                <ul class="navbar-nav" id="accordion">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="collapse" data-target="#home" aria-expanded="true" aria-controls="home" href="index.php">Home</a>
                                     </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="collapse" data-target="#tour" aria-expanded="true" aria-controls="tour" href="tour-result-list.php">Bookings</a>
                                      </li>
                                  <li class="nav-item"> <a class="nav-link" href="contact.php">contact</a>
                                    </li>
                                     <li class="nav-item"> <a class="nav-link" href="plane_details.php">contact</a>
                                          </li>


                                <div class="icon-nav-mobile-close"> <i class="fas fa-times"></i>
                                </div>
                            </nav>
                        </div>
                        <!-- End Nav mobile -->
                       </div>
                   </div>

                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <!-- Content Page -->
    <div class="wrapper-page">
        <div class="content">
            <!-- Slide Section -->
            <div class="bg-slide d-flex h-100">
                <div class="content-slide align-self-center w-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-slide text-center">
                                    <h1 class="animated-Fade-In-Up-1">DISCOVER</h1>
                                    <h3 class="animated-Fade-In-Up-2">THE WORLD YOU HAVE NEVER SEEN</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            <!-- Tab Search Section -->
            <div class="tab-search">
                <div class="base-tab-list">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" id="pills-flight-tab" data-toggle="pill" href="index.html#pills-flight" role="tab" aria-controls="pills-flight" aria-selected="true"><i class="fas fa-plane"></i>Flight</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="base-tab-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-flight" role="tabpanel" aria-labelledby="pills-flight-tab">
                                        <div class="base-find-flight">
                                            <div class="find-flight-title text-center">
                                                <h1>Find Your Flight</h1>
                                            </div>
                                            <div class="find-flight-form">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12">
                                                        <div class="group-radio">
                                                        <div class="rdio form-check form-check-inline"> <input name="radio" value="1" id="radio1" type="radio" checked>
                                                          <label for="radio1">One-way</label>
                                                        </div>
                                                        <div class="rdio form-check form-check-inline">
                                                          <input name="radio" value="2" id="radio2" type="radio">
                                                          <label for="radio2">Return</label>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-8 col-lg-3">
                                                        <div class="form-group">
                                                            <label>Source</label>
                                                            <input type="text" class="form-control" placeholder="Write the place" required> <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-lg-3">
                                                        <div class="form-group" >
                                                            <label>Destination</label>
                                                            <input type="text" class="form-control" placeholder="Write the place" required> <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-2">
                                                        <div class="form-group" >
                                                            <label>Date</label>
                                                            <input type="text" class="form-control date" placeholder="MM/DD/YY" required> <i class="fas fa-calendar-alt"></i>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 col-md-3 col-lg-2">
                                                        <div class="form-group" >
                                                            <label>Adult</label>
                                                            <input type="text" class="form-control" placeholder="0" required> <i class="fas fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-2">
                                                        <div class="form-group" >
                                                            <label>Children</label>
                                                            <input type="text" class="form-control" placeholder="0" required> <i class="fas fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="group-btn-flight"> <a href="Flights.php" class="btn btn-primary"><i class="fas fa-search"></i>Search now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab Search Section -->

            <!-- End Awesome Tours Section -->
            <!-- Services Tour Section -->
            <div class="services-tour">
                <div class="group-services-tour">
                    <div class="container">
                        <div class="row-services-1">
                            <div class="row">
                                <div class="col-md-12 col-lg-4">
                                    <div class="card-services-tour animated-Fade-In-1 text-center"> <i class="fas fa-camera-retro fa-3x"></i>
                                        <div class="content-services-tour">
                                            <h3>best tour services</h3>
                                            <p>We understand you may need to change your travel plans. To get the latest info.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="card-services-tour animated-Fade-In-2 text-center"> <i class="fas fa-coffee fa-3x"></i>
                                        <div class="content-services-tour">
                                            <h3>best package tour</h3>
                                            <p>We understand you may need to change your travel plans. To get the latest info.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="card-services-tour animated-Fade-In-3 text-center"> <i class="fas fa-luggage-cart fa-3x"></i>
                                        <div class="content-services-tour">
                                            <h3>Handpicked Hotels</h3>
                                            <p>We understand you may need to change your travel plans. To get the latest info.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-services-2">
                            <div class="row">
                                <div class="col-md-12 col-lg-4">
                                    <div class="card-services-tour animated-Fade-In-4 text-center"> <i class="fas fa-heart fa-3x"></i>
                                        <div class="content-services-tour">
                                            <h3>Accesibility managment</h3>
                                            <p>We understand you may need to change your travel plans. To get the latest info.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="card-services-tour animated-Fade-In-5 text-center"> <i class="fas fa-mountain fa-3x"></i>
                                        <div class="content-services-tour">
                                            <h3>Latest Model Vehicles</h3>
                                            <p>We understand you may need to change your travel plans. To get the latest info.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="card-services-tour animated-Fade-In-6 text-center"> <i class="fas fa-subway fa-3x"></i>
                                        <div class="content-services-tour">
                                            <h3>Premium city tours</h3>
                                            <p>We understand you may need to change your travel plans. To get the latest info.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Tour Section -->
            <!-- Number Features Section -->
            <div class="number-features">
                <div class="group-number-features">
                    <div class="container">
                        <div class="row">
                            <div class="number-title">
                                <h1>Features</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="card-number text-center">
                                    <h3 class="count">452</h3>
                                    <p>First Class Flights</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card-number text-center">
                                    <h3 class="count">563</h3>
                                    <p>Premium Flights</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card-number text-center">
                                    <h3 class="count">234</h3>
                                    <p>Handpicked Flghts</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card-number text-center">
                                    <h3 class="count">673</h3>
                                    <p>Latest Flights</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Number Features Section -->
            <!-- About Us Section -->

            <!-- End About Us Section -->
            <!-- CTA Section -->


            <div class="contact-us">
                <div class="content-contact-us">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 offset-lg-6">
                                <div class="form-contact-us animated-Fade-In-Up-2">
                                    <h1>Travel</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- End Content Page -->
    <!-- Footer Style -->
    <footer>
        <div class="bg-footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-3">
                            <div class="info-company-widget">
                                <div class="footer-logo">
                                    <h1><a href="index.html">Travel</a></h1>
                                </div>
                                <div class="content-widget">
                                    <p>Travel .</p> <span><i class="fas fa-phone"></i>1800-123-1234</span>
                                    <div class="social"> <a href="index.php"><i class="fab fa-facebook-square"></i></a>
                                        <a href="index.php"><i class="fab fa-twitter"></i></a>
                                        <a href="index.php"><i class="fab fa-pinterest"></i></a>
                                        <a href="index.php"><i class="fas fa-rss"></i></a>
                                        <a href="index.php"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Style -->
    <!-- Bootstrap JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/owl.carousel.js"></script>
    <script src="../js/bootstrap-datepicker.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <!-- Custom scripts  -->
    <script src="../js/main.js"></script>
</body>

</html>
