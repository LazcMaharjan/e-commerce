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
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Add Product</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="products" class="product-list">
            <div class="product">
                <img src="productimage/sitaram.jpeg" alt="Milk" style="max-width: fit-content; align-items: center; ">
                <div class="product-details">
                    <h3>Milk</h3>
                    <p>Rs 50</p>
                    <a href="viewcart.php?price=50"><button onclick="viewcart.php" class="GFG">Add to Cart</button></a>
                </div>
            </div>
            <div class="product">
                <img src="productimage/hajmola.jpg" alt="Hajmola">
                <div class="product-details">
                    <h3>Hajmola</h3>
                    <p>Rs 500</p>
                    <a href="viewcart.php"><button onclick="viewcart.php" class="GFG">Add to Cart</button></a>
                </div>
            </div>
            <div class="product">
                <img src="productimage/imilibom.jfif" alt="Imilibom">
                <div class="product-details">
                    <h3>Imilibom</h3>
                    <p>Rs 500</p>
                    <a href="viewcart.php"><button onclick="viewcart.php" class="GFG">Add to Cart</button></a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 E-commerce Website. All rights reserved.</p>
    </footer>
</body>
</html>
