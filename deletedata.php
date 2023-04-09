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
    if (isset($_POST['submit'])) 
    {
        $id = $_POST['id'];
        $delete = "DELETE FROM nfts WHERE cid = $id";
        $result = mysqli_query($dbc, $delete) or die("Error querying database");

        if ($result && mysqli_affected_rows($dbc) > 0) 
        {
            echo "Transaction deleted successfully!";
        } 
        else 
        {
            echo "Transaction not found or could not be deleted.";
        }
    }
    mysqli_close($dbc);
}
?>
