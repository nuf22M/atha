<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>
    <base href="<?php echo rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); ?>/">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/about.css">
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
            <li><a href="About" class="active-tab">About</a></li>
            <li><a href="Services">Services</a></li>
            <li><a href="Appliedstudies">Applied Studies</a></li>
            <li><a href="contact">Contact Us</a></li>
        </ul>
    </div>

    <!-- First Content Section (Text Left, Image Right) -->
    <div class="content-container-first">
        <div class="text-section-first">
            <h2>About US</h2>
            <p>At Reezin Digital, we're innovators driven by the power of digital marketing to create impactful solutions that fuel growth and success.</p>
            <a href="contact" class="start-building-btn">Start Building It</a>
        </div>
        <div class="image-section-first">
            <img src="assets/images/demo.webp" alt="Digital Solutions">
        </div>
    </div>

    <!-- Second Content Section (Image Left, Text Right) -->
    <div class="content-container-second">
        <div class="image-section-second">
            <img src="assets/images/demo.webp" alt="Our Team">
        </div>
        <div class="text-section-second core-values">
            <h2>We Are a Team of Experts</h2>
            <p>Reezin Digital -we are a team of 12 experts with over 6 years of experience in website development and digital marketing, committed to helping businesses thrive online.</p>
            <h3>Our Core Values</h3>
            <ul>
                <li>Commitment: Delivering exceptional results that exceed expectations.</li>
                <li>Transparency: Providing honest, clear, and open communication.</li>
                <li>Collaboration: Together, we thrive.</li>
                <li>Innovation: Evolving with the latest technology.</li>
            </ul>
        </div>
    </div>

    <!-- Third Content Section (Feedback) -->
    <div class="feedback-section">
        <h4>Feedback</h4>
        <h2>What Our Clients Say?</h2>
        <h5>Genuine testimonials that inspire and reflect our dedication to excellence.</h5>

        <div class="testimonial-container">
            <!-- Testimonial Card 1 -->
            <div class="testimonial-card">
                <div class="profile-section">
                    <img src="assets/images/demo.webp" alt="User Profile">
                    <h5><strong>Othaim Supermarket</strong></h5>
                </div>
                <div class="testimonial-text">
                    <h5><strong>Abul Azeez, Othaim Supermarket, Kattankudy</strong></h5>
                    <h5>"Reezin Digital excels in UI/UX and web development! Their expertise, creativity, and attention to detail made the process seamless. Our website now stands out highly recommended!"</h5>
                    <div class="stars">
                        &#9733;&#9733;&#9733;&#9733;&#9733;
                    </div>
                </div>
            </div>

            <!-- Testimonial Card 2 -->
            <div class="testimonial-card">
                <div class="profile-section">
                    <img src="assets/images/demo.webp" alt="User Profile">
                    <h5><strong>MBM Stores</strong></h5>
                </div>
                <div class="testimonial-text">
                    <h5><strong>MBM Stores, Kattankudy</strong></h5>
                    <h5>"Reezin Digital is the go-to agency for logo and branding! Their creativity and professionalism delivered a captivating logo and a perfect branding strategy aligned with our goals. Highly recommended!"</h5>
                    <div class="stars">
                        &#9733;&#9733;&#9733;&#9733;&#9734;
                    </div>
                </div>
            </div>

            <!-- Testimonial Card 3 -->
            <div class="testimonial-card">
                <div class="profile-section">
                    <img src="assets/images/demo.webp" alt="User Profile">
                    <h5><strong>Mohan</strong></h5>
                </div>
                <div class="testimonial-text">
                    <h5><strong>Mohan, Swiss</strong></h5>
                    <h5>"Reezin Digital's social media marketing is top-notch! Their strategies boosted Delhi Zaiqa's online presence and customer engagement. For elevated brand visibility, they're the perfect choice. Highly recommended!"</h5>
                    <div class="stars">
                        &#9733;&#9733;&#9733;&#9733;&#9733;
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fourth Content Section (Dark Blue Background) -->
    <div class="content-container-fourth">
        <div class="text-section-fourth">
            <h2>Let us together build a flourishing business</h2>
        </div>
        <div class="text-section-fourth">
            <p>When connected with us, you aren't growing your business alone.<br> We have your back and put in our best to contribute to the growth<br> of your entire team and organization. So, if you are looking for the right<br> agency that'll help you build a good online presence and bring in more conversions<br> and revenue, we are right here!</p>
        </div>
    </div>

    <!-- Footer Section -->
    <footer style="background-color: #1a2a3a; color: white; padding: 30px 20px; font-size: 14px;">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between; gap: 20px;">
            <!-- Featured Services -->
            <div>
                <h4 style="color: skyblue;">Featured Services</h4>
                <ul style="list-style: none; padding: 0; line-height: 1.8;">
                    <li>Web Development</li>
                    <li>UI UX Design</li>
                    <li>SEO & SEM Services</li>
                    <li>Graphic Designing</li>
                    <li>Content Marketing</li>
                    <li>Social Media Marketing</li>
                    <li>Branding & Logo Designing</li>
                    <li>eCommerce Development</li>
                    <li>Website Management</li>
                </ul>
            </div>

            <!-- Company -->
            <div>
                <h4 style="color: skyblue;">Company</h4>
                <ul style="list-style: none; padding: 0; line-height: 1.8;">
                    <li>About Szamee</li>
                    <li>Case Studies</li>
                    <li>Our Team</li>
                    <li>Our Locations</li>
                    <li>FAQs</li>
                    <li>Blog</li>
                </ul>
            </div>

            <!-- Legal -->
            <div>
                <h4 style="color: skyblue;">Legal</h4>
                <ul style="list-style: none; padding: 0; line-height: 1.8;">
                    <li>Terms & Conditions</li>
                    <li>Privacy Policy</li>
                    <li>Refund Policy</li>
                </ul>
            </div>

            <!-- Contact Us -->
            <div>
                <h4 style="color: skyblue;">Contact Us</h4>
                <ul style="list-style: none; padding: 0; line-height: 1.8;">
                    <li>UAE: +971 50 700 4556</li>
                    <li>SL: +94 77 995 5016</li>
                    <li>CA: +1 (647) 931-0673</li>
                    <li>Email: <a href="mailto:hello@szamee.com" style="color: skyblue; text-decoration: none;">hello@szamee.com</a></li>
                </ul>
                <!-- Small Logo -->
                <a href="#" style="display: inline-block; margin-top: 20px;">
                    <img src="assets/images/demo.webp" alt="Logo" style="height: 50px;">
                </a>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div style="text-align: center; margin-top: 30px; border-top: 1px solid #444; padding-top: 20px; font-size: 12px;">
            <p>© 2025 Szamee. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
