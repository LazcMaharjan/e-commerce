<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAZC Supermarket</title>
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
                <li><a href="#" class="active">Home</a></li>
                <!-- You can add more navigation links here if needed -->
            </ul>
        </nav>
    </header>

    <main>
        <section id="products" class="product-list">
            <?php
            // Include the database connection file
            include 'db_connect.php';

            // Fetch products from the database
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            // Display products
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='product'>";
                    echo "<img src='" . $row["image_url"] . "' alt='" . $row["name"] . "'>";
                    echo "<div class='product-details'>";
                    echo "<h3>" . $row["name"] . "</h3>";
                    echo "<p>Rs " . $row["price"] . "</p>";
                    // You can add "Add to Cart" buttons or links here
                    echo "</div></div>";
                }
            } else {
                echo "No products found.";
            }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 E-commerce Website. All rights reserved.</p>
    </footer>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
