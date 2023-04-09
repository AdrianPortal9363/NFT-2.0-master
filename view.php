<?php
$db_host="localhost";
$db_username="nftuser";
$db_passwd="Heavenguard0525.";
$db_name="nftwebsite";
$dbc=mysqli_connect($db_host,$db_username,$db_passwd,$db_name) or die ("Could not Connect! \n");

$query = "SELECT * FROM nfts";
$result = mysqli_query($dbc, $query);

if (!$result) 
{
    die("Error querying database: " . mysqli_error($dbc));
}

echo "<table>";
echo "<tr><th>Image</th><th>Price</th><th>Name</th></tr>";
while ($row = mysqli_fetch_assoc($result)) 
{
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    $image_path = "uploads/" . $row['image'];
    $price = $row['price'];
    $name = $row['name'];
    echo "<tr><td><img src='$image_path></td><td>$price</td><td>$name</td></tr>";
}
echo "</table>";

mysqli_close($dbc);
?>