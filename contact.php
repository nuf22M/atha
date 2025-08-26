<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <base href="<?php echo rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); ?>/">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>
    <!-- Logo Section -->
    <div class="logo">
        <img src="assets/images/demo.webp" alt="Logo">
    </div>

    <!-- Navigation Bar -->
    <div class="navbar">
        <input type="checkbox" id="nav-toggle" />
        <label for="nav-toggle" class="nav-toggle-label">Menu</label>
        <label for="nav-toggle" class="nav-overlay"></label>
        <ul>
            <li class="nav-close-li"><label for="nav-toggle" class="nav-close">✕</label></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="About">About</a></li>
            <li><a href="Services">Services</a></li>
            <li><a href="Appliedstudies">Applied Studies</a></li>
            <li><a href="contact" class="active-tab">Contact Us</a></li>
        </ul>
    </div>

    <!-- First Content Section -->
    <div class="content-container-first">
        <div class="text-section-first">
            <h2>Welcome to Our Website</h2>
            <p>We're here to help. Let's create something amazing together!</p>
            <a href="contact" class="start-building-btn">Ready to connect? Let's contact!</a>
        </div>

        <div class="image-section-first">
            <img src="assets/images/demo.webp" alt="Digital Solutions">
        </div>
    </div>

    <!-- Third Content Section -->
    <div class="content-container-third">
        <div class="image-section-third">
            <img src="assets/images/demo.webp" alt="Project Idea">
        </div>
        <div class="text-section-third">
            <h2>Got a project idea? Let's make it happen!</h2>
            <h3>Let's turn your ideas into reality and create something great together!</h3>
            <a href="contact" class="start-building-btn">Start with us</a>
        </div>
    </div>

    <!-- Fourth Content Section (Directly Below Third) -->
    <div class="content-container-fourth">
        <div class="text-section-fourth">
            <h2>Let us grow up yours succeed business together</h2>
            <h4>You could level up your business with us. We provide extraordinary services to uplift your entire team or organization. If you looking for the perfect digital support to your perfection, we are here to ready for your best online presence as your innovative digital solution. Let's connect with us today!</h4>
        </div>
    </div>

    <!-- Fifth Content Section -->
    <div class="content-container-fifth">
        <div class="contact-details">
            <h2>We are here to help!</h2>
            <div class="contact-item">
                <img src="assets/images/demo.webp" alt="UAE Logo">
                <p>UAE - Deira, DUBAI<br>+971 50 700 4556</p>
            </div>
            <div class="contact-item">
                <img src="assets/images/demo.webp" alt="Sri Lanka Logo">
                <p>Sri Lanka - Akkaraipattu, AMPARA<br>+94 77 995 5016</p>
            </div>
            <h3>Follow us</h3>
            <div class="social-links">
                <a href="#">Linkedin</a>
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
                <a href="#">Facebook</a>
                <a href="#">Pinterest</a>
                <a href="#">Behance</a>
            </div>
        </div>

        <?php
        if (isset($_GET['message']) && $_GET['message']=="success") {
        ?>
            <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                <h2>Mail sent successfully</h2>
                <a href="contact" style="color: #008678;">Close</a>
            </div>
        <?php
        }
        ?>

        <div class="contact-form">
            <h2>Send us a message</h2>
            <form method="post" action="https://formsubmit.co/mohamednufail11@gmail.com" style="margin-top: 20px;">

                <label for="email">Email *</label>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
                
                <label for="_subject">Subject *</label>
                <input type="text" id="_subject" name="_subject" placeholder="Subject" required>
                
                <label for="message">Comment or Message *</label>
                <textarea id="message" name="message" rows="5" placeholder="First Name:&#13;&#10;Last Name:&#13;&#10;Message:" required></textarea>

                <input type="hidden" name="_next" value="http://localhost/Web/contact?message=success">
                
                <button type="submit" style="background-color: #3c8c6f; color: white; padding: 12px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">Send Message</button>
            </form>
        </div>
    </div>
</body>
</html>
