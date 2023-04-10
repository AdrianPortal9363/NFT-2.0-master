<?php
session_start();

if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
    echo "Session started for " . $_SESSION['username'];
} else {
    echo "Error: no username provided";
}
?>