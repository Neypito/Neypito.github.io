<!DOCTYPE html>
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
      
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Register</h1>
      <form method="post" action="register.php" enctype="multipart/form-data">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="nickname">Nickname:</label>
        <input type="text" id="nickname" name="nickname" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="image">Profile Image:</label>
        <input type="file" id="image" name="image">
        <br>
        <button type="submit">Register</button>
      </form>
    </div>
  </body>
</html>

