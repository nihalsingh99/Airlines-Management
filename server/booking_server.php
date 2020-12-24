<?php
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'air';
foreach($db as $key => $value){
  define(strtoupper($key), $value);
}
$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
?>
<form class="" name="form1" method="post">
  <?php
  if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $fname = $_POST['flight_name'];
      $fpnr = $_POST['flight_PNR'];
      $price = $_POST['Price'];
      $time = $_POST['Time'];
      if(empty(fname)){
      $error_msg = "Flight Name is Required";
      } else {
     $query = "INSERT INTO `booking_done` (`booking_id`, `username`, `flight_name`, `flight_PNR`, `Price`, `Time`, `Date`) VALUES (NULL, '$username', '$fname', '$fpnr', '$price', '$time', '$date')";

    if(mysqli_query($link,$query)){
    $msg = "Flight Booked Successfully";
    } else {
    $error_msg = "Failed to Book";
    }
    }
    }
?>
