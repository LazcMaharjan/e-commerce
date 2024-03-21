<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAZC Supermarkrt</title>
    <link rel="stylesheet" href="styles.css">
    <?php
    include 'db_connect.php'; // Assuming db_connect.php is the name of your database connection file
    ?>
    <style>
        /* CSS for image resizing */
        .product img {
            max-width: 200px; /* Adjust the maximum width as needed */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
</head>
<body>
    <header>
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;LAZC Supermarket</h1>
        <nav class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Add Product</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>