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
        background-color: yellow; /* Add this line to change the background to yellow */
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
              <ion-icon
