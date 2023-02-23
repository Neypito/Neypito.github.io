<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>My Blog - Register</title>
    <style>
      /* CSS styles */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #F5F5F5;
      }
      
      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
      }
      
      button {
        background-color: #4CAF50;
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 10px;
      }
      
      button:hover {
        background-color: #3e8e41;
      }
      
      /* links */
      a {
        color: #000;
        text-decoration: none;
        display: block;
        padding: 5px 0;
        border-bottom: 1px solid #000;
        margin-bottom: 10px;
      }
      
      a:hover {
        color: #4CAF50;
      }
      
      /* Form */
      form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
      }
      
      input[type="text"], input[type="email"], input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
      }
      
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
      }
      
      input[type="submit"]:hover {
        background-color: #45a049;
      }
      
      .error {
        color: red;
      }
    </style>
  </head>
  <body>
    <?php
      $nameErr = $emailErr = $passwordErr = "";
      $name = $email = $password = "";
      $profilePicture = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate name
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } else {
          $name = test_input($_POST["name"]);
          // Check if name contains only letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
          }
        }

        // Validate email
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } else {
          $email = test_input($_POST["email"]);
          // Check if email address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }
        }

        // Validate password
        if (empty($_POST["password"])) {
          $passwordErr = "Password is required";
        } else {
          $password = test_input($_POST["password"]);
          // Check if password is strong enough
          if (strlen($password) < 


