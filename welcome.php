<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}

// Define the HTML page link
$htmlPageLink = "index.html";

// Redirect the user to the HTML page
header("location: $htmlPageLink");
exit;
?>
