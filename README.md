<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
      /* CSS styles */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #F5F5F5;
      }
css
Copy code
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
  
  /* form styles */
  form {
    max-width: 500px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 5px #666;
  }
  
  input[type="text"], input[type="email"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type="file"] {
    margin-bottom: 20px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  
  .error {
    color: #FF0000;
    margin-bottom: 10px;
  }
  
</style>
  </head>
  <body>
    <div class="container">
      <h1>Register</h1>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>
php
Copy code
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailErr; ?></span>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <span class="error"><?php echo $passwordErr; ?></span>
    
    <label for="profilePicture">Profile Picture:</label>
    <input type="file" id="profilePicture" name="profilePicture">
    
    <button type="submit">Register</button>
  </form>
</div>
  </body>
</html>
