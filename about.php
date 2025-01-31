<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>About Us</h1>
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
        <section>
            <h2>About Our Company</h2>
            <p>We are a leading company in providing the best products to our customers. Our mission is to offer the highest quality products at the best prices.</p>
        </section>
    </main>
</body>
</html>