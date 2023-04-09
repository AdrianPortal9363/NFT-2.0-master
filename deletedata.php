<?php
$db_host = "localhost";
$db_username = "nftuser";
$db_password = "Heavenguard0525.";
$db_name = "nftwebsite";
$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

if (isset($_POST['submit'])) 
{

    $id = $_POST['id'];
    $delete = $connection->prepare("DELETE FROM nfts WHERE cid = $transaction_id");

    if ($delete->affected_rows > 0) 
    {
        echo "Transaction deleted successfully!";
    } 
    else 
    {
        echo "Transaction not found or could not be deleted.";
    }
}
mysqli_close($connection);
?>