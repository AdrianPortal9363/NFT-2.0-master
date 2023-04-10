<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Feedback Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="Images/favicon.png">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <script src="jquery-3.6.3.min.js"></script>
    <script src="java.js"></script>
    <script src="rotatingimages.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-m7ZUC/81g1lh8pOfW9Xv/ga8kMIneljk0Q0Cb/RxKMyC1YDklH/+zGZfJ0eeiKudT8Tqk3muCwmDjKPFxGdQIg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="feedback_styles.css">

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
    <main class="Feedback">
        <form name="feedback_form" method="post" onsubmit="return validateFeedbackForm()" action="thankyou.html">
            <fieldset>
                <legend>Feedback Form</legend>
                <label for="name">Name<span class="required">*</span></label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="email">Email</label>
                <input type="email" id="email" name="email"><br><br>

                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone"><br><br>

                <label for="feedback_type">Type of Feedback</label><br>
                <input type="radio" id="positive" name="feedback_type" value="positive">
                <label for="positive">Positive</label><br>
                <input type="radio" id="negative" name="feedback_type" value="negative">
                <label for="negative">Negative</label><br>
                <input type="radio" id="neutral" name="feedback_type" value="neutral">
                <label for="neutral">Neutral</label><br><br>

                <label for="comments">Comments</label><br>
                <textarea id="comments" name="comments" rows="5" cols="50"></textarea><br><br>

                <label for="subscribe">Subscribe to Newsletter?</label>
                <input type="checkbox" id="subscribe" name="subscribe" value="subscribe"><br><br>

                <input type="submit" value="Submit">
			</fieldset>
		</form>
	</main>
	<footer>
		<div class="icon-box">
    <a href="mailto:davidajose30@gmail.com"><span><i class="fas fa-envelope"></i></span></a>
	<a href="tel:123-456-7890"><span><i class="fas fa-phone"></i></span></a>
</div>


		<div id="copyright">
            NFTCopyright © 2023 (Adrian Portal Calcines n01489363) (David Ajose n01367559) (Damanpreet Singh n01426028) (Satinder Kaur n01421666)
        </div>
		<nav>
			<ul id="footer-nav">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Contact Us</a></li>
			</ul>
		</nav>
	</footer>

</body>
</html>
