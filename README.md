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
      <div id="register-form">
        <?php
          session_start();
          if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            echo "<h2>Welcome " . $_SESSION["nickname"] . "</h2>";
            echo "<a href='logout.php'><button>Logout</button></a>";
          } else {
            echo "<h2>Register or Login</h2>";
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              // Get form data
              $email = $_POST['email'];
              $nickname = $_POST['nickname'];
              $password = $_POST['password'];

              // TODO: Validate form data and check user information in database
              // Here you can use any method to validate user data, like checking with a database or a file.

              // For the purpose of this example, we are hardcoding the login information.
              $valid_user = false;
              $users = [
                ["email" => "test1@example.com", "nickname" => "test1", "password" => "password1"],
                ["email" => "test2@example.com", "nickname" => "test2", "password" => "password2"]
              ];

              foreach ($users as $user) {
                if ($
