<?php
$db_host = "localhost";
$db_username = "nftuser";
$db_passwd = "Heavenguard0525.";
$db_name = "nftwebsite";

$dbc = mysqli_connect($db_host, $db_username, $db_passwd, $db_name) or die ("Could not connect! \n");

if ($dbc->connect_error) 
{
    die('Connection failed: ' . $dbc->connect_error);
}
else 
{
    echo "Connection established. \n";

    $id = $_POST['id'];
    error_log("The ID value is: " . $id);
    $name = $_POST['name'];
    $price = $_POST['price'];

    if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) 
    {
        $image = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $path = "uploads/" . $image;
        move_uploaded_file($temp_name, $path);
        $query = "UPDATE nfts SET name='$name', price='$price', image='$image' WHERE cid='$id'";
        $result = mysqli_query($dbc, $query) or die("Error querying database");
    }
    else
    {
        $query = "UPDATE nfts SET name='$name', price='$price' WHERE cid='$id'";
        $result = mysqli_query($dbc, $query) or die("Error querying database");
    }
    mysqli_close($dbc);
}
?>