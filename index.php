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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <header class="navbar">
    <nav>
      <ul>
        <li><a href="./index.php">Home</a></li>
        <li><a href="marketplace.php">Marketplace</a></li>
        <li><a href="./aboutus.php">About Us</a></li>
        <li><a href="./feedback.php">Feedback</a></li>
        <li><a href="./information.php">Information</a></li>
        <li><a href="./inputpage.php">Database input</a></li>
        <li><a href="./deletepage.php">Delete page</a></li>
        <li><a href="./altertables.php">Alter tables</a></li>
      </ul>
    </nav>
    <div>
      <a href="#" class="cart-icon right"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
      <a href="registration.php" class="wallet-icon right"><i class="fa fa-wallet" aria-hidden="true"></i></a>
      <a href="loginpage.php" class="user-icon right"><i class="fa fa-user" aria-hidden="true"></i></a>
    </div>
  </header>
  <img src="Images/bored-apes.jpg" id="rotating_img" alt="Bored apes picture">
  <main>
    
    <h1> <br> <br> <br> Explore, collect, and sell NFTs</h1>
    <div id="nft-container">
      <div class="nft-txt-bottomleft">
        <img src="Images/nftimage1.png" alt="NFT 1" class="nft-img">
        <p class="nft-profile-price">PixelGuru<br>Floor Price: 1.42 ETH</p>
      </div>
      <div class="nft-txt-bottomleft">
        <img src="Images/nftimage2.png" alt="NFT 2" class="nft-img">
        <p class="nft-profile-price">CryptoArtisan<br>Floor Price: 2.43 ETH</p>
      </div>
      <div class="nft-txt-bottomleft">
        <img src="Images/nftimage3.png" alt="NFT 3" class="nft-img">
        <p class="nft-profile-price">DigitalDreamer<br>Floor Price: 0.08 ETH</p>
      </div>
      <div class="nft-txt-bottomleft">
        <img src="Images/nftimage4.png" alt="NFT 4" class="nft-img">
        <p class="nft-profile-price">NFTNinja<br>Floor Price: 0.10 ETH</p>
      </div>
      <div class="nft-txt-bottomleft">
        <img src="Images/nftimage5.png" alt="NFT 5" class="nft-img">
        <p class="nft-profile-price">ByteMaster<br>Floor Price: 11.50 ETH</p>
      </div>
      <div class="nft-txt-bottomleft">
        <img src="Images/nftimage6.png" alt="NFT 6" class="nft-img">
        <p class="nft-profile-price">EtherScape<br>Floor Price: 1.79 ETH</p>
      </div>
      <div class="nft-txt-bottomleft">
        <img src="Images/nftimage7.png" alt="NFT 7" class="nft-img">
        <p class="nft-profile-price">DAppDeck<br>Floor Price: 0.33 ETH</p>
      </div>
    </div>
    <div class="trending-container">
      <h2>Information About the Product</h2>
      <ul class="trending-list">
        <p>The product being sold is NFTs. NFTs are images and art that can be bought and sold to have ownership of it. <br>
          This website facilitates the buying and selling of the NFTs by having a simple upload and download button. <br>
          The NFTs can also be bought using crypto currency which allow for easier and faster purchases with little limitations. <br>
          To upload or download NFTs you will have to sign in to our website and connect your wallet or bank. </p>
      </ul>
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
  <script src="java.js"></script>
</body>
</html>  
</body>
</html>
