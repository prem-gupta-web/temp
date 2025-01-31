<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Shopping Website</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="feedback.php">Feedback</a>
            <a href="faq.php">FAQ</a>
            <a href="location.php">Our Location</a>
            <a href="contact.php">Contact Us</a>
            <a href="#products">Products</a>
            <a href="#cart">Cart</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </nav>
    </header>
    <main>
        <section id="products">
            <h2>Products</h2>
            <input type="text" id="search" placeholder="Search for products...">
            <div class="product-list">
                <!-- Products will be dynamically loaded here -->
            </div>
        </section>
        <section id="cart">
            <h2>Cart</h2>
            <div class="cart-list">
                <!-- Cart items will be dynamically added here -->
            </div>
            <div class="cart-total">
                Total: $<span id="cart-total">0</span>
            </div>
            <a href="checkout.php" class="checkout-button">Checkout</a>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>