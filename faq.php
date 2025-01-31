<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>FAQ</h1>
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
            <h2>Frequently Asked Questions</h2>
            <ul>
                <li><strong>Q1: How can I track my order?</strong><br>A: You can track your order by logging into your account and checking the order status.</li>
                <li><strong>Q2: What is your return policy?</strong><br>A: We accept returns within 30 days of purchase. Please visit our returns page for more information.</li>
                <li><strong>Q3: How can I contact customer support?</strong><br>A: You can contact our customer support through the contact form on our Contact Us page.</li>
            </ul>
        </section>
    </main>
</body>
</html>