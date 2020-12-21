<?php include("./server/login_server.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travel | Register Page</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,700&display=swap" rel="stylesheet">
    <!-- Library CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Template CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="logo-spinner">
            <img src="img/logo-2.png" alt="">
        </div>
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- End of Preloader -->
    <!-- Content Page -->
    <div class="wrapper-page">
        <div class="content">
            <!-- Page Register Section -->
            <div class="page-register d-flex h-100">
                <div class="content-register align-self-center w-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 offset-lg-3">
                                <div class="base-form-register">
                                    <div class="title-form text-center">
                                        <a href="index.php">
                                            <img src="img/logo-2.png" alt="">
                                        </a>
                                        <h3>CREATE YOUR ACCOUNT AND JOIN WITH US!</h3>
                                    </div>
                                    <div class="form-register">
                                      <form class="" action="register.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-12">
                                                <div class="form-group name">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" name="username" placeholder="Enter Your Name..."> <i class="fas fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12">
                                                <div class="form-group email">
                                                    <label>EMAIL</label>
                                                    <input type="text" class="form-control" name="email" placeholder="Enter Your Email..."> <i class="fas fa-envelope"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12">
                                                <div class="form-group pw">
                                                    <label>PASSWORD</label>
                                                    <input type="password" class="form-control" name="password_1" placeholder="Enter Your Password..."> <i class="fas fa-key"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12">
                                                <div class="form-group re-pw">
                                                    <label>CONFIRM PASSWORD </label>
                                                    <input type="password" class="form-control" name="password_2" placeholder="Enter Your Password..."> <i class="fas fa-key"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" name="reg_user" class="btn btn-primary">create account</button>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Register Section -->
        </div>
    </div>
    <!-- End Content Page -->
    <!-- Bootstrap JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- Custom scripts  -->
    <script src="js/main.js"></script>
</body>

</html>
