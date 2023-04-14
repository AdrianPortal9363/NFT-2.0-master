<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NFT Website</title>
        <link rel="icon" type="image/png" href="Images/favicon.png">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="h1.css">
        <script src="jquery-3.6.3.min.js"></script>
        <script src="jquery.js"></script>
        <script src="registrationsp.js"></script>
    </head>
    <body>
        <header class="navbar">
            <nav>
                <h1>Registration Page</h1>
            </nav>
        </header>
        <a class="back" href="index.php"><span class="fas fa-long-arrow-alt-left"></span> back to home page</a>
        <main class="loginpage">
            <div class="login_page">
                <form action="registrationverifiication.php" method="POST">
                    <label for="Username" id="Username_label">Username</label>
                    <input type="text" name="Username" id="Username_" size="40" value="" class="text-input"/>
                    <label for="Password" id="Password_label">Password</label>
                    <input type="password" name="Password" id="Password_" size="40" value="" class="pass-input">
                    <label for="email" id="email_label">Email</label>
                    <input type="text" name="Email" id="Email_" size="40" value="" class="email-input">
                    <label for="Phone" id="Phone_label">Phone</label>
                    <input type="text" name="phone" id="phone_" size="40" value="" class="phone-input">
                    <input type="submit" name="submit" class="submit" id="sub_button" value="Register">
                </form>
            </div>
            <div class="side_info">
                <h3>Username specifications: <br> <br>
                   * Must be all letters and numbers. <br> <br>
                   * Must begin with a letter. <br> <br>
                   Password specifications: <br> <br>
                   * Must be 8 to 16 characters long. <br> <br>
                   * Must start with a letter. <br> <br>
                   * Has at least one ! Or * in it. <br> <br>
                   * Has as least 1 digit in it. <br> <br>
                </h3> 
            </div>
        </main>
        <footer>
            <div id="copyright">
              NFTCopyright © 2023
            </div>
            <ul id="footer-nav">
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </footer>
    </body>
</html>