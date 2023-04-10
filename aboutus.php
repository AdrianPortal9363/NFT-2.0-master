<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NFT Website</title>
  <link rel="icon" type="image/png" href="Images/favicon.png">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="java.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <header class="navbar">
    <nav>
      <ul>
        <li><a href="./index.html">Home</a></li>
        <li><a href="marketplace.php">Marketplace</a></li>
        <li><a href="./aboutus.html">About Us</a></li>
        <li><a href="./feedback.html">Feedback</a></li>
        <li><a href="./information.html">Information</a></li>
        <li><a href="./inputpage.php">Database input</a></li>
        <li><a href="./deletepage.php">Delete page</a></li>
        <li><a href="./altertables.php">Alter tables</a></li>
      </ul>
    </nav>
    <div>
      <a href="#" class="cart-icon right"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
      <a href="#" class="wallet-icon right"><i class="fa fa-wallet" aria-hidden="true"></i></a>
      <a href="loginpage.php" class="user-icon right"><i class="fa fa-user" aria-hidden="true"></i></a>
    </div>
  </header>
  <main class="about-us">
    <h1>About Us</h1>
<p>Welcome to our NFT website! This is a project for internet programming class, it was made using css, js and html.  </p>

<h2>Meet Our Team</h2>
<br>
<br>
<ul>
  <li>
    <h3>Adrian Portal Calcines</h3>
    <p>Hello my name is Adrian and my hobby is to play video games, i dont know what i want to do in the future career wise but im liking programming so far. I've enjoyed my time at humber so far.</p>
  </li>
  <li>
    <h3>David Ajose</h3>
    <p>Hi, I'm David and my hobbies are programming and playing soccer, im looking to find a career in the field im currently studying. Humber has been a great experience so far.</p>
  </li>
  <li>
    <h3>Damanpreet Singh</h3>
    <p>Hii my name is Damanpreet Singh and I am taking Computer Engneering technology course at Humber College. 
      In future I see my career in tech field, I especially want to go into Cyber Security Field. 
      For my passion, I like to write the meaningfull quots in a creative way and like to disscuss in deep about the understanding of life.</p>
  </li>
  <li>
    <h4>Satinder Kaur</h4>
    <p>Hey 
      My name is Satinder Kaur and I am pursuing Computer Engineering Technology program at Humber College. 
      So far I have learned alot and I’m still learning because it’s never ending process. 
      This program is really interesting and worthy as I can choose my career in software, hardware or networking field. After completion of my course I would prefer to work in the networking field. 
      Other than this, I like to do painting whenever I get time, hanging out with friends and enjoying movie nights.</p>
  </li>
</ul>
<h2>Contact Us</h2>
<p>If you have any questions or feedback, please don't hesitate to reach out to us. You can contact us at contact@nftwebsite.com.</p>
</main>
  <footer>
    <div id="copyright">
      NFTCopyright © 2023 (Adrian Portal Calcines n01489363) (David Ajose n01367559) (Damanpreet Singh n01426028) (Satinder Kaur n01421666)
    </div>
    <ul id="footer-nav">
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Terms of Use</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  </footer>
</body>
</html>
