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
      }
      
      button:hover {
        background-color: #3e8e41;
      }
      
      /* JavaScript */
      function handleClick() {
        alert("Button clicked!");
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Welcome to my website!</h1>
      <p>Click the button below to see an alert.</p>
      <button onclick="handleClick()">Click me!</button>
    </div>
  </body>
</html>
