<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <style>
      /* CSS styles */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: linear-gradient(to bottom, #8E2DE2, #4A00E0);
      }
      
      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.1);
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
      
      /* JavaScript */
      function handleClick() {
        alert("Button clicked!");
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Welcome to my website!</h1>
      <p>Follow me on social media:</p>
      <button onclick="window.open('https://discord.gg/vqJukpmcpc')">Discord</button>
      <button onclick="window.open('https://github.com/Neypito')">Github</button>
      <button onclick="window.open('https://www.instagram.com/', '_blank')">Instagram</button>
    </div>
    
    <div class="container">
      <h2>Blog & News</h2>
      <form>
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content"></textarea><br>
        <button type="submit">Post</button>
      </form>
    </div>
  </body>
</html>


