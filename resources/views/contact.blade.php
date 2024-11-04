<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact_style.css">
</head>
<body>
    <header class="contact-header">
        <h1>Contact Us</h1>
        <nav>
            <a href="/simple_page">Home</a>
            <a href="/about-us">About</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <main class="contact-content">
        <section class="contact-section">
            <h2>Get in Touch</h2>
            <p>If you have any questions, feel free to reach out. Simply fill in the form below, and we’ll get back to you as soon as possible.</p>
            
            <!-- Contact Form -->
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Your Message" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 PHP Laravel Support LTD. . All rights reserved.</p>
    </footer>
</body>
</html>
