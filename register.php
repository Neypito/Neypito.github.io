<?php
// Connect to MySQL database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'example_db';
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
  die('Could not connect to database: ' . mysqli_connect_error());
}

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get form data
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  // Insert new user into database
  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
  if (mysqli_query($conn, $sql)) {
    echo 'Registration successful';
  } else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
  }

  // Close database connection
  mysqli_close($conn);
}
?>

