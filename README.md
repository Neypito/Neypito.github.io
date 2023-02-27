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
      function handleClick {
        alert("Button clicked!");
      }
      {
    height: 100%;
}

body
{
    margin: 0;
    background-color: #292929;
    overflow: hidden;
}

nav
{
    position: absolute;
    top: 50%;
    right: 0;
    left: 0;
    width: 319px;
    display: table;
    margin: 0 auto;
    transform: translateY(-50%);
}

nav a
{
    position: relative;
    width: 33.333%;
    display: table-cell;
    text-align: center;
    color: #949494;
    text-decoration: none;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: bold;
    padding: 10px 15px;
    transition: 0.2s ease color;
}

nav a:before, nav a:after
{
    content: "";
    position: absolute;
    border-radius: 50%;
    transform: scale(0);
    transition: 0.2s ease transform;
}

nav a:before
{
    top: 0;
    left: 10px;
    width: 6px;
    height: 6px;
}

nav a:after
{
    top: 5px;
    left: 18px;
    width: 4px;
    height: 4px
}

nav a:nth-child(1):before
{
    background-color: yellow;
}

nav a:nth-child(1):after
{
    background-color: red;
}

nav a:nth-child(2):before
{
    background-color: #00e2ff;
}

nav a:nth-child(2):after
{
    background-color: #89ff00;
}

nav a:nth-child(3):before
{
    background-color: purple;
}

nav a:nth-child(3):after
{
    background-color: palevioletred;
}

#indicator
{
    position: absolute;
    left: 5%;
    bottom: 0;
    width: 30px;
    height: 3px;
    background-color: #fff;
    border-radius: 5px;
    transition: 0.2s ease left;
}

nav a:hover
{
    color: #fff;
}

nav a:hover:before, nav a:hover:after
{
    transform: scale(1);
}

nav a:nth-child(1):hover ~ #indicator
{
    background: linear-gradient(130deg, yellow, red);
}

nav a:nth-child(2):hover ~ #indicator
{
    left: 34%;
    background: linear-gradient(130deg, #00e2ff, #89ff00);
}

nav a:nth-child(3):hover ~ #indicator
{
    left: 70%;
    background: linear-gradient(130deg, purple, palevioletred);
}

#ytd-url {
  display: block;
  position: fixed;
  right: 0;
  bottom: 0;
  padding: 10px 14px;
  margin: 20px;
  color: #fff;
  font-family: Arial;
  font-size: 14px;
  text-decoration: none;
  background-color: #000;
  border-radius: 4px;
  box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.3);
  z-index: 125;
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
    <a href="https://discord.gg/xzpNx2Tx" target="_blank">
      <span class="icon">
        <ion-icon name="logo-discord"></ion-icon>
      </span>
      <span class="text">Discord</span>
    </a>
    
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
      <nav>
        <a href="#">Главная</a>
        <a href="#">О нас</a>
        <a href="#">Контакты</a>
        <div id="indicator"></div>
      </nav>
    </div>
  </body>
</html>
