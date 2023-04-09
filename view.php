<?php
$db_host="localhost";
$db_username="nftuser";
$db_passwd="Heavenguard0525.";
$db_name="nftwebsite";
$dbc=mysqli_connect($db_host,$db_username,$db_passwd,$db_name) or die ("Could not Connect! \n");

$nftsquery = "SELECT * FROM nfts";

$nfts = mysqli_query($dbc, $nftsquery);

if (!$nfts) 
{
    die("Error querying database: " . mysqli_error($dbc));
}

echo "<div class='nft-container'>";
while ($row = mysqli_fetch_assoc($nfts)) 
{
    $path = "/var/www/nftwebsite/Uploads/" . $row['image'];
    $price = $row['price'];
    $name = $row['name'];
    echo "<div class='nft-item'>
            <img src='$path' width='100'>
            <div class='nft-details'>
                <div class='nft-name'>$name</div>
                <div class='nft-price'>$price</div>
            </div>
         </div>";
}
echo "</div>";

mysqli_close($dbc);
?>

