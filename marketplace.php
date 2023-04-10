<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NFT Website</title>
  <link rel="icon" type="image/png" href="Images/favicon.png">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="jquery-3.6.3.min.js"></script>
  <script src="java.js"></script>
  <script src="rotatingimages.js"></script>
  <script src="Onclick.js"></script>
  <script src="expandedText.js"></script>
  <script src="uploadScreen.js"></script>
  <script src="debugging.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <header class="navbar">
    <nav>
      <ul>
        <li><a href="./index.html">Home</a></li>
        <li><a href="#">Marketplace</a></li>
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
        <main>
            <div id="market">
            </div>
            <?php include 'view.php'; ?>
            </div>
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