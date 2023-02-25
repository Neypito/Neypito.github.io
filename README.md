<html>
  <head>
    <meta charset="UTF-8">
    <title>My Blog</title>
    <style>
      /* CSS styles */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #F5F5F5;
        background-image: url('https://cdn140.picsart.com/291356568027201.gif?to=min&r=1024');
        background-size: cover;
        background-repeat: no-repeat;
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
      
      /* registration form */
      #register-form {
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #FFF;
        border: 1px solid #CCC;
        padding: 20px;
      }
      
      #register-form input {
        display: block;
        margin-bottom: 10px;
      }
      
    </style>
  </head>
  <body>
    <div class="container">
      <h1>My Blog History</h1>
      <ul>
        <li><a href="#">Blog Post 1</a></li>
        <li><a href="#">Blog Post 2</a></li>
        <li><a href="#">Blog Post 3</a></li>
        <li><a href="#">Blog Post 4</a></li>
        <li><a href="#">Blog Post 5</a></li>
      </ul>
      <?php
        // Set up authorization
        session_start();

        // Check if user is logged in
        $logged_in = false;
        if (isset($_SESSION['user_id'])) {
          $logged_in = true;
        }

        // Handle logout
        if (isset($_GET['logout'])) {
          session_destroy();
          header('Location: ' . $_SERVER['PHP_SELF']);
          exit;
        }

        // Handle login
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          // Get form data
          $email = $_POST['email'];
          $password = $_POST['password'];

          // TODO: Validate form data and check if user exists in database

          // Simulate successful login
          $_SESSION['user_id'] = 1;
          header('Location: ' . $_SERVER['PHP_SELF']);
          exit;
        }

        // Render login/logout form
        if (!$logged_in) {
          ?>
          <div id="register-form">
            <h2>Login</h2>
            <form method="POST">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
              <label for="password">Password:</label>
              <input type="password"
