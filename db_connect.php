<?php
// Database configuration
$servername = "localhost"; // Change this if your MySQL server is on a different host
$username = "root"; // Replace with your MySQL username
$password = "your_password"; // Replace with your MySQL password
$database = "ecommerce"; // Replace with the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>