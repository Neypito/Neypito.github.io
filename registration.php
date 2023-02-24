<?php
// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get form data
  $email = $_POST['email'];
  $nickname = $_POST['nickname'];
  $password = $_POST['password'];

  // Check if image was uploaded
  if (isset($_FILES['image'])) {
    $image = $_FILES['image'];
    // Check if file is an image
    if (strpos($image['type'], 'image/') === 0) {
      // Generate unique filename
      $filename = uniqid() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
      // Save file to server
      move_uploaded_file($image['tmp_name'], 'uploads/' . $filename);
      echo 'File uploaded successfully!';
    } else {
      echo 'Invalid file type.';
    }
  } else {
    echo 'No file uploaded.';
  }
}
?>

