<?php
// Replace with your database connection details
$server = "localhost";
$username = "root";
$password = "";
$database = "car_rental";

// Establish the database connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $carType = $_POST['carType'];
  $pickupDate = $_POST['pickupDate'];
  $returnDate = $_POST['returnDate'];

  // Insert the rental details into the database
  $sql = "INSERT INTO rentals (name, email, phone, car_type, pickup_date, return_date)
          VALUES ('$name', '$email', '$phone', '$carType', '$pickupDate', '$returnDate')";

  if ($conn->query($sql) === TRUE) {
    echo "Thank you for renting a car. Your rental details have been recorded.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close the database connection
$conn->close();
?>
