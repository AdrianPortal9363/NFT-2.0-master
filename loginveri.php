<?php
session_start();

if (isset($_POST['submit'])) 
{
    $conn = mysqli_connect("localhost", "nftuser", "Heavenguard0525.", "nftwebsite");

    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $query = "SELECT salt, password_hash FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) 
    {

        $salt = $row['salt'];
        $hash = $row['password_hash'];
        $password = $salt . $password;
        $password = hash('sha256', $password);
        if ($password == $hash) 
        {

            $_SESSION['username'] = $username;

            header("Location: loginsuccessful.php");
            exit();
        } 
        else 
        {

            echo "Invalid password";
        }
    } 
    else 
    {

        echo "Invalid username";
    }

    mysqli_close($conn);
}
?>