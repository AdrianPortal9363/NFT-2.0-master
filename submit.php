<?php
$db_host = "localhost";
$db_username = "nftuser";
$db_passwd = "Heavenguard0525.";
$db_name = "nftwebsite";

$dbc = mysqli_connect($db_host, $db_username, $db_passwd, $db_name) or die ("Could not connect! \n");

if ($dbc->connect_error) {
    die('Connection failed: ' . $dbc->connect_error);
}
else {
    echo "Connection established. \n";

    $price = $_POST['price'];
    $name = $_POST['name'];

    $image = $_FILES['file_upload']['name'];
    $temp_name = $_FILES['file_upload']['tmp_name'];
    $path = "/var/www/nftwebsite/Uploads/" . $image;
    move_uploaded_file($temp_name, $path);

    $sql = "INSERT INTO nfts (price, name, image) VALUES ('$price', '$name', '$image')";
    $result = mysqli_query($dbc, $sql) or die("Error querying database");

    mysqli_close($dbc);
}
?>


<?php
$db_host = "localhost";
$db_username = "nftuser";
$db_passwd = "Heavenguard0525.";
$db_name = "nftwebsite";

$dbc = mysqli_connect($db_host, $db_username, $db_passwd, $db_name) or die ("Could not connect! \n");

if ($dbc->connect_error) {
    die('Connection failed: ' . $dbc->connect_error);
}
else {
    echo "Connection established. \n";

    $price = $_POST['price'];
    $name = $_POST['name'];

    $sql = "INSERT INTO nfts (price, name, image) VALUES ('$price', '$name', '$image')";
    $result = mysqli_query($dbc, $sql) or die("Error querying database");

    mysqli_close($dbc);
}
?>