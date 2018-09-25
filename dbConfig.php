<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "82135";
$dbPassword = "C1snpbmd";
$dbName     = "db82135";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>