<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Save feedback to the database or send it via email
    // For simplicity, we'll just display a thank you message
    echo "Thank you for your feedback, $name!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Feedback</h1>
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
            <h2>We Value Your Feedback</h2>
            <form method="POST" action="">
                <label>Name:</label>
                <input type="text" name="name" required>
                <label>Email:</label>
                <input type="email" name="email" required>
                <label>Message:</label>
                <textarea name="message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>
</body>
</html>