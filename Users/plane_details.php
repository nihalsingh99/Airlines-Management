<?php include ("db.php");
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>
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
                                    <li class="nav-item"> <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" href="booking.php">Bookings</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" href="contact.php">contact</a>
                                   </li>
                                   <li class="nav-item"> <a class="nav-link active" href="plane_detail.php">Details</a>
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
                                    <li class="nav-item"> <a class="nav-link" href="plane_detail.php">Details</a>
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
                                  <!--Flight Sear-->
                                    <h1 class="animated-Fade-In-Up-1">Plain Details</h1>
                                    <?php
                                      $db = mysqli_connect('localhost', 'root', '', 'air');
                                      $query = "SELECT * FROM plane_detail ";
                                      $run = mysqli_query($db,$query);
                                      if(mysqli_num_rows($run) > 0){
                                        ?>

                                        <table class="table align-items-center table-flush" >
                                          <thead class="thead-light">
                                            <?php if(isset($error_msg)){
                                                echo "<span style='color:red;' class='pull-right'>$error_msg</span>";
                                              }else if(isset($msg)) {
                                                  echo "<span style='color:green;' class='pull-right'>$msg</span>";
                                                }
                                                ?>
                                            <tr>
                                              <th scope="col">Flights</th>
                                              <th scope="col">Flights PNR</th>
                                              <th scope="col">Flight Capacity</th>
                                              <th scope="col">Type</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                            while($row = mysqli_fetch_array($run)){
                                              $flight_name = $row['flight_name'];
                                              $flight_PNR = $row['flight_PNR'];
                                              $capacity =$row['capacity'];
                                            ?>
                                              <tr>

                                                <th scope="row">
                                                  <?php echo $flight_name; ?>
                                                </th>
                                                <td>
                                                  <?php echo $flight_PNR; ?>
                                                </td>
                                                <td>
                                                  <?php echo $capacity; ?>
                                                </td>
                                                <td>

                                                </td>
                                              </tr>
                                            <?php } ?>
                                          </tbody>
                                          <?php
                                        }else {
                                          echo "<center><h2>No Details Available in Library</h2><br><hr></center>";
                                        }
                                        ?>
                                      </table>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
      <!-- Footer Style -->
    <footer>
        <div class="bg-footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-3">
                            <div class="info-company-widget">
                                <div class="footer-logo">
                                    <h1><a href="index.php">Travel</a></h1>
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
