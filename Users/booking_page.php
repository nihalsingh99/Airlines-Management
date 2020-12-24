<?php include("././server/booking_server.php"); ?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}
.container {
  padding: 16px;
  background-color: white;
}
input[type=text], input[type=password], input[type=date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus, input[type=date]:focus {
  background-color: #ddd;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.bookbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.bookbtn:hover {
  opacity: 1;
}
a {
  color: dodgerblue;
}

</style>
</head>
<body>
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
  <div class="container">
    <h1>Ticket Booking</h1>
    <p>Please fill in this form to book a Ticket.</p>
    <hr>
    <label for="username"><b>Username</b></label>
    <input type="text" name="flight_name" placeholder="Enter your username"value="<?php $username ?>" required>
    <label for="flight_name"><b>Flight name</b></label>
    <input type="text" name="flight_name" placeholder="Enter flight name"value="<?php $flight_name ?>" required>
    <label for="flight_PNR"><b>Flight PNR</b></label>
    <input type="text" name="flight_PNR" placeholder="Enter flight PNR"value="<?php $flight_PNR ?>" >
    <label for="Date"><b>Date</b></label><br>
    <input type="text" class="form-control date" placeholder="MM/DD/YY" value="<?php $flight_date ?>" >
    <label for="Price"><b>Time</b></label>
    <input type="text" name="Time" placeholder="Enter time" value="<?php $flight_time ?>" >
    <label for="Price"><b>Price</b></label>
    <input type="text" name="Price" placeholder="Enter Price" value="<?php $Price ?>" >
    <button  class="bookbtn" type="submit" value="submit"  name="submit" href="booking.php">Book Now</button>
  </form>
</body>
</html>
