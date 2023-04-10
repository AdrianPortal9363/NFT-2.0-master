<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $email = $_POST['Email'];
    $phone = $_POST['phone'];

    $salt = bin2hex(random_bytes(16));
    $hashed_password = hash('sha256', $password . $salt);

    $db_host = "localhost";
    $db_username = "nftuser";
    $db_passwd = "Heavenguard0525.";
    $db_name = "nftwebsite";

    $conn = mysqli_connect($db_host, $db_username, $db_passwd, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO users (username, password, email, phone) VALUES ('$username', '$hashed_password', '$email', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>