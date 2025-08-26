<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Page</title>
    <base href="<?php echo rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); ?>/">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/services.css">
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
            <li><a href="Services" class="active-tab">Services</a></li>
            <li><a href="Appliedstudies">Applied Studies</a></li>
            <li><a href="contact">Contact Us</a></li>
        </ul>
    </div>

    <!-- First Content Section -->
    <div class="content-container-first">
        <div class="text-section-first">
            <h2>Reezin Digital: Elevate Your Brand with Excellence</h2>
            <p>At Reezin Digital, we empower ambitious brands with top-tier social media, digital marketing, and creative solutions designed to drive success. With a strong presence in Sri Lanka, we are a dynamic, full-service agency specializing in digital marketing, video production, web design, advertising, and comprehensive development services.</p>
            <a href="contact" class="start-building-btn">Start Building It</a>
        </div>
        <div class="image-section-first">
            <img src="assets/images/demo.webp" alt="Digital Solutions">
        </div>
    </div>

    <!-- Second Content Section -->
    <div class="content-container-second">
        <h2>Let's transform your vision into reality because your ambition deserves nothing less.</h2>
        <h3>Our expertise spans the entire spectrum of marketing and digital innovation, allowing us to craft seamless, end-to-end strategies tailored to each client's unique goals. Whether you need to build a powerful online presence, engage audiences with compelling content, or develop cutting-edge digital solutions, Reezin Digital delivers with precision and creativity.</h3>
    </div>

    <!-- Third Content Section -->
    <div class="content-container-third">
        <div class="design-section">
            <h2>Creative Design at the Heart of Digital Excellence</h2>
            <h4>At Reezin Digital, we blend data-driven decisions with a deep understanding of your brand. By analyzing analytics, user behavior, and platform performance, we create innovative solutions aligned with your goals and growth strategies. With us, you get not just creative design, but insights that drive results and transform your brand for lasting success.</h4>
        </div>

        <div class="development-section">
            <h2>Digital Development: Building Websites That Drive Success</h2>
            <h4>At Reezin Digital, we create stunning, user-friendly websites that boost your brand and drive business growth. Our expert team uses the latest technologies and best practices to deliver high-performance digital experiences with modern design, intuitive navigation, and seamless functionality. From corporate sites to eCommerce platforms, we're your trusted partner in digital excellence. Let's build something extraordinary together.</h4>
        </div>

        <div class="marketing-section">
            <h2>Digital Marketing: Strategies That Drive Growth</h2>
            <h4>At Reezin Digital, we create tailored digital marketing strategies that amplify your brand and tackle key challenges. Our expert team develops results-driven plans to maximize reach, engagement, and conversions. With a data-driven approach, every campaign aligns with your business goals—turning potential into performance.</h4>
        </div>
    </div>

    <!-- What We Do Section -->
    <div class="what-we-do-section">
        <h4>Let's create a strategy for success.</h4>
        <h2>Elevate Your Wallet Product with Reezin Digital</h2>
    </div>

    <!-- Card Section -->
    <div class="card-section">
        <h2>Creative Designing.</h2>
        <div class="card">
            <div>
                <h3>Graphic Design</h3>
                <h4>Bringing ideas to life.</h4>
            </div>
            <div>
                <h3>Branding</h3>
                <h4>Defining your unique identity.</h4>
            </div>
            <div>
                <h3>UI/UX</h3>
                <h4>Creating seamless digital experiences.</h4>
            </div>
            <div>
                <h3>WhitePaper</h3>
                <h4>Simplifying ideas with visuals.</h4>
            </div>
            <div>
                <h3>Social Media</h3>
                <h4>Engaging, impactful storytelling.</h4>
            </div>
        </div>
    </div>

    <!-- Card Section -->
    <div class="card-section">
        <h2>Digital Development.</h2>
        <div class="card">
            <div>
                <h3>Website Development</h3>
                <h4>Bringing your digital vision to life</h4>
            </div>
            <div>
                <h3>eCommerce Development</h3>
                <h4>Building powerful and scalable online stores.</h4>
            </div>
            <div>
                <h3>SEO Web Design</h3>
                <h4>Optimized websites that rank and convert.</h4>
            </div>
            <div>
                <h3>Front End Development</h3>
                <h4>Creating intuitive and engaging user experiences.</h4>
            </div>
            <div>
                <h3>Content Front & Strategy</h3>
                <h4>Strategic content that drives meaningful impact.</h4>
            </div>
        </div>
    </div>

    <!-- Card Section -->
    <div class="card-section">
        <h2>Digital Marketing.</h2>
        <div class="card">
            <div>
                <h3>Technical SEO</h3>
                <h4>Boosting visibility with smart optimizations.</h4>
            </div>
            <div>
                <h3>Pay-Per-Click</h3>
                <h4>Targeted ads for instant, measurable results.</h4>
            </div>
            <div>
                <h3>Content Marketing</h3>
                <h4>Crafting stories that inform and convert.</h4>
            </div>
            <div>
                <h3>LinkedIn</h3>
                <h4>Strengthening your brand on a global stage.</h4>
            </div>
            <div>
                <h3>Social Media</h3>
                <h4>Engaging audiences, driving meaningful connections.</h4>
            </div>
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
                    <!-- <img src="small-logo.png" alt="Logo" style="height: 50px;"> -->
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
