<?php
$db_host="localhost";
$db_username="nftuser";
$db_passwd="Heavenguard0525.";
$db_name="nftwebsite";
$dbc=mysqli_connect($db_host,$db_username,$db_passwd,$db_name) or die ("Could not Connect! \n");

$query = "SELECT * FROM nfts";
$result = mysqli_query($dbc, $query) or die("Error querying database");

echo "<table>";
echo "<tr><th>Image</th><th>Price</th><th>Name</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    $image_path = "uploads/" . $row['image'];
    $price = $row['price'];
    $name = $row['name'];
}
echo "</table>";

mysqli_close($dbc);
?>