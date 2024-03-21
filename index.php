<?php
    require 'functions.php';
    get_header();
?>
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
