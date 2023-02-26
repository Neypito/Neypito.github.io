
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
<div class="navigation">
  <ul>
<li class="list">
<a href="#">
  <span class="icon">
    <ion-icon name="home-outline"></ion-icon>
  </span>
  <span class="text">Home</span>
</a>
</li>
<li class="list">
  <a href="#">
    <span class="icon">
      <ion-icon name="person-circle-outline"></ion-icon>
    </span>
    <span class="text">Profile</span>
  </a>
  </li>
  <li class="list">
    <a href="#">
      <span class="icon">
        <ion-icon name="logo-discord"></ion-icon>
      </span>
      <span class="text">Discord</span>
    </a>
    <link rel="stylesheet" href="https://discord.gg/vqJukpmcpc">
    
  </ul>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>


  <body>
    <div class="container">
      <h1>Welcome to my website!</h1>
      <p>Follow me on social media:</p>
      <button onclick="window.open('https://discord.gg/vqJukpmcpc')">Discord</button>
      <button onclick="window.open('https://github.com/Neypito')">Github</button>
      <button onclick="window.open('https://www.instagram.com/', '_blank')">Instagram</button>
    </div>
  </body>
</html>
