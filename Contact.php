<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare+ - Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        /* Navbar styling - matching your theme */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: white;
            padding: 8px 40px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            font-family: Arial, sans-serif;
            min-height: 60px;
            border: none;
        }

        .navbar .logo a {
            color: #006666;
            font-size: 24px;
            font-weight: 700;
            text-decoration: none;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links li a {
            color: #2c3e50;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            transition: color 0.3s;
            white-space: nowrap;
        }

        .nav-links li a:hover {
            color: #ff6b6b;
        }

        .btn-primary-nav {
            background: #007bff;
            color: white;
            padding: 8px 22px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn-primary-nav:hover {
            background: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,123,255,0.3);
        }

        /* Contact Page Styling */
        .contact-page {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: calc(100vh - 100px);
            padding: 60px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-container {
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
        }

        .contact-card {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            animation: slideUp 0.5s ease;
            text-align: center;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Title styling - modified from your original */
        .title {
            margin-bottom: 40px;
            position: relative;
        }

        .title h1 {
            color: #006666;
            font-size: 42px;
            font-weight: 700;
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .title h1:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        .title p {
            color: #666;
            font-size: 16px;
            margin-top: 20px;
        }

        /* Contact info styling - modified from your list */
        .contact-info {
            margin: 40px 0;
        }

        .contact-item {
            display: flex;
            align-items: center;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
            margin-bottom: 20px;
            transition: all 0.3s;
            text-align: left;
            border-left: 5px solid #006666;
        }

        .contact-item:hover {
            transform: translateX(10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            background: white;
        }

        .contact-icon {
            font-size: 32px;
            margin-right: 20px;
            min-width: 50px;
            text-align: center;
        }

        .contact-details {
            flex: 1;
        }

        .contact-details h3 {
            color: #333;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .contact-details a {
            color: #006666;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
            display: block;
        }

        .contact-details a:hover {
            color: #ff6b6b;
        }

        .contact-details .small-text {
            color: #999;
            font-size: 13px;
            margin-top: 3px;
        }

        /* List styling - incorporating your square bullets */
        .custom-list {
            list-style-type: square;
            padding-left: 0;
        }

        .custom-list li {
            margin-bottom: 15px;
            font-size: 16px;
        }

        /* Social media section */
        .social-section {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 2px dashed #e0e0e0;
        }

        .social-section h3 {
            color: #333;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            text-decoration: none;
            transition: all 0.3s;
        }

        .social-icon:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(102,126,234,0.3);
        }

        /* Business hours */
        .business-hours {
            background: #f0f8ff;
            border-radius: 15px;
            padding: 20px;
            margin-top: 30px;
        }

        .business-hours h4 {
            color: #006666;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .hours-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            color: #555;
        }

        /* Footer styling - matching your theme */
        footer {
            background: #006666;
            color: white;
            text-align: center;
            padding: 15px;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        footer p {
            margin: 0;
            color: white;
        }

        /* Responsive design */
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 8px 20px;
                flex-wrap: wrap;
            }
            
            .nav-links {
                order: 3;
                width: 100%;
                justify-content: center;
                margin-top: 10px;
                gap: 15px;
                flex-wrap: wrap;
            }
            
            .contact-card {
                padding: 30px;
            }
            
            .title h1 {
                font-size: 32px;
            }
            
            .contact-item {
                flex-direction: column;
                text-align: center;
                padding: 15px;
            }
            
            .contact-icon {
                margin-right: 0;
                margin-bottom: 10px;
            }
            
            .contact-details {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header/Navbar - same as other pages -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="./index.php">MediCare+</a>
            </div>

            <ul class="nav-links">
                <li><a href="./Home1.php">Home</a></li>
                <li><a href="./about.php">About</a></li>
                <li><a href="./appointment.php">Add appointment</a></li>
                <li><a href="./appointments.php">View appointments</a></li>
                <li><a href="./Contact.php" style="color: #ff6b6b;">Contact</a></li>
            </ul>

            <a href="./index.php" class="btn-primary-nav">Get Started</a>
        </nav>
    </header>

    <!-- Contact Page Content -->
    <main class="contact-page">
        <div class="contact-container">
            <div class="contact-card">
                <!-- Title section - modified from your original -->
                <div class="title">
                    <h1>📞 Contact Us</h1>
                    <p>We're here to help 24/7. Reach out to us anytime!</p>
                </div>

                <!-- Contact information - incorporating your list items -->
                <div class="contact-info">
                    <!-- Hotline - your first list item -->
                    <div class="contact-item">
                        <div class="contact-icon">📱</div>
                        <div class="contact-details">
                            <h3>24/7 Hotline</h3>
                            <a href="tel:+941011123675">+94 1011 123 675</a>
                            <span class="small-text">Emergency & General Inquiries</span>
                        </div>
                    </div>

                    <!-- Email - your second list item -->
                    <div class="contact-item">
                        <div class="contact-icon">📧</div>
                        <div class="contact-details">
                            <h3>Email Support</h3>
                            <a href="mailto:medicare@email.com">medicare@email.com</a>
                            <span class="small-text">Response within 2 hours</span>
                        </div>
                    </div>

                    <!-- Facebook - your third list item -->
                    <div class="contact-item">
                        <div class="contact-icon">👥</div>
                        <div class="contact-details">
                            <h3>Facebook</h3>
                            <a href="https://facebook.com/medicare" target="_blank">medicare@facebook.com</a>
                            <span class="small-text">Follow us for updates</span>
                        </div>
                    </div>

                    <!-- Additional contact method (keeping your square list style) -->
                    <div class="contact-item" style="display: block; text-align: left;">
                        <h3 style="margin-bottom: 15px;">📍 Quick Contact Options:</h3>
                        <ul class="custom-list" style="color: #006666;">
                            <li><strong>WhatsApp:</strong> +94 77 123 4567</li>
                            <li><strong>Viber:</strong> +94 1011 123 675</li>
                            <li><strong>Telegram:</strong> @MediCarePlus</li>
                        </ul>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="business-hours">
                    <h4>🕒 Business Hours</h4>
                    <div class="hours-row">
                        <span>Monday - Friday</span>
                        <span>8:00 AM - 8:00 PM</span>
                    </div>
                    <div class="hours-row">
                        <span>Saturday</span>
                        <span>9:00 AM - 6:00 PM</span>
                    </div>
                    <div class="hours-row">
                        <span>Sunday</span>
                        <span>9:00 AM - 2:00 PM</span>
                    </div>
                    <div class="hours-row" style="color: #dc3545; font-weight: 600;">
                        <span>Emergency</span>
                        <span>24/7 Support</span>
                    </div>
                </div>

                <!-- Social Media Section -->
                <div class="social-section">
                    <h3>Connect With Us</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon">📘</a>
                        <a href="#" class="social-icon">🐦</a>
                        <a href="#" class="social-icon">📷</a>
                        <a href="#" class="social-icon">💼</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer - matches your original with styling -->
    <footer>
        <p>&copy; 2026 MediCare+</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>