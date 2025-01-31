<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Location</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Our Location</h1>
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
            <h2>Visit Us</h2>
            <p>Our office is located at:</p>
            <p>123 Main Street, City, Country</p>
            <p>We are open from 9:00 AM to 6:00 PM, Monday to Friday.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093745!2d144.9537353153175!3d-37.81627917975157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5778d7f0c1e2f0!2s123%20Main%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1611140069264!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
    </main>
</body>
</html>