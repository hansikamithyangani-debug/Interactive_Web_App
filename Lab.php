<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare+ - Laboratory Services</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        /* Navbar styling */
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

        /* Laboratory Services Page */
        .lab-page {
            background: linear-gradient(135deg, #43cea2 0%, #185a9d 100%);
            min-height: calc(100vh - 100px);
            padding: 40px 20px;
        }

        .lab-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header Section */
        .lab-header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .lab-header h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .lab-header p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.95;
        }

        .lab-badge {
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 8px 25px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 20px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255,255,255,0.3);
        }

        /* Search and Filter */
        .lab-search-section {
            background: white;
            border-radius: 50px;
            padding: 5px;
            max-width: 600px;
            margin: 0 auto 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            display: flex;
            overflow: hidden;
        }

        .lab-search-section input {
            flex: 1;
            border: none;
            padding: 15px 25px;
            font-size: 16px;
            outline: none;
        }

        .lab-search-section button {
            background: #185a9d;
            color: white;
            border: none;
            padding: 15px 35px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            border-radius: 50px;
            margin: 3px;
        }

        .lab-search-section button:hover {
            background: #43cea2;
        }

        /* Category Tabs */
        .category-tabs {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .category-tab {
            background: white;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 600;
            color: #555;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .category-tab:hover {
            background: #185a9d;
            color: white;
            transform: translateY(-2px);
        }

        .category-tab.active {
            background: #185a9d;
            color: white;
        }

        /* Lab Services Grid */
        .lab-services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .lab-service-card {
            background: white;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .lab-service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .service-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #43cea2;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .service-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .service-icon img {
            width: 60px;
            height: 60px;
        }

        .lab-service-card h3 {
            font-size: 22px;
            color: #333;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .lab-service-card .description {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .test-details {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            margin: 15px 0;
        }

        .test-details p {
            margin: 5px 0;
            color: #555;
            font-size: 14px;
        }

        .test-details i {
            color: #185a9d;
            width: 20px;
            display: inline-block;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 2px dashed #e0e0e0;
        }

        .price {
            font-size: 24px;
            font-weight: 700;
            color: #185a9d;
        }

        .price small {
            font-size: 14px;
            color: #999;
            font-weight: normal;
        }

        .book-btn {
            background: linear-gradient(135deg, #43cea2, #185a9d);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .book-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(24,90,157,0.3);
            color: white;
        }

        /* Home Collection Banner */
        .home-collection-banner {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 20px;
            padding: 40px;
            margin: 40px 0;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
        }

        .banner-content {
            flex: 1;
            min-width: 300px;
        }

        .banner-content h2 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .banner-content p {
            font-size: 16px;
            opacity: 0.95;
            margin-bottom: 20px;
        }

        .banner-features {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
        }

        .banner-feature {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .banner-feature span {
            font-size: 24px;
        }

        .banner-btn {
            background: white;
            color: #667eea;
            border: none;
            padding: 15px 40px;
            border-radius: 30px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
        }

        .banner-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            color: #764ba2;
        }

        /* Why Choose Us Section */
        .why-choose-us {
            margin: 60px 0;
        }

        .why-choose-us h2 {
            text-align: center;
            color: white;
            font-size: 36px;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .feature-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .feature-card h4 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .feature-card p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }

        /* Booking Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 20px;
            padding: 40px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            animation: modalSlide 0.3s ease;
        }

        @keyframes modalSlide {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-header h2 {
            color: #185a9d;
            font-size: 24px;
        }

        .close-btn {
            font-size: 30px;
            cursor: pointer;
            color: #999;
            transition: color 0.3s;
        }

        .close-btn:hover {
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #43cea2;
            outline: none;
        }

        .time-slots {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-top: 10px;
        }

        .time-slot {
            background: #f8f9fa;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .time-slot:hover {
            border-color: #43cea2;
            background: #e8f5e9;
        }

        .time-slot.selected {
            background: #43cea2;
            color: white;
            border-color: #185a9d;
        }

        .confirm-btn {
            width: 100%;
            background: linear-gradient(135deg, #43cea2, #185a9d);
            color: white;
            border: none;
            padding: 15px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 20px;
        }

        .confirm-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(24,90,157,0.3);
        }

        /* Footer */
        footer {
            background: #006666;
            color: white;
            text-align: center;
            padding: 10px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            min-height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        footer p {
            margin: 0;
            color: white;
        }

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
            
            .lab-header h1 {
                font-size: 32px;
            }
            
            .lab-services-grid {
                grid-template-columns: 1fr;
            }
            
            .home-collection-banner {
                padding: 30px;
                text-align: center;
                justify-content: center;
            }
            
            .banner-features {
                justify-content: center;
            }
            
            .time-slots {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .success-message {
            display: none;
            background: #43cea2;
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            animation: slideIn 0.5s ease;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    <!-- Header/Navbar -->
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
                <li><a href="./Contact.php">Contact</a></li>
            </ul>

            <a href="./index.php" class="btn-primary-nav">Get Started</a>
        </nav>
    </header>

    <!-- Laboratory Services Page -->
    <main class="lab-page">
        <div class="lab-container">
            <!-- Header Section -->
            <div class="lab-header">
                <span class="lab-badge">🧪 NABL ACCREDITED LAB</span>
                <h1>Diagnostic Laboratory Services</h1>
                <p>Advanced diagnostics with accurate results. Choose from 1000+ tests with home sample collection available.</p>
            </div>

            <!-- Search Section -->
            <div class="lab-search-section">
                <input type="text" placeholder="Search for tests (e.g., Full Blood Count, Lipid Profile, Diabetes)" id="testSearch">
                <button onclick="searchTests()">🔍 Search Tests</button>
            </div>

            <!-- Category Tabs -->
            <div class="category-tabs">
                <button class="category-tab active" onclick="filterTests('all')">All Tests</button>
                <button class="category-tab" onclick="filterTests('blood')">Blood Tests</button>
                <button class="category-tab" onclick="filterTests('diabetes')">Diabetes</button>
                <button class="category-tab" onclick="filterTests('thyroid')">Thyroid</button>
                <button class="category-tab" onclick="filterTests('cardiac')">Cardiac</button>
                <button class="category-tab" onclick="filterTests('liver')">Liver</button>
            </div>

            <!-- Success Message -->
            <div class="success-message" id="bookingSuccess">
                ✅ Test booked successfully! Confirmation has been sent to your mobile.
            </div>

            <!-- Lab Services Grid -->
            <div class="lab-services-grid" id="labServices">
                <!-- Complete Blood Count -->
                <div class="lab-service-card" data-category="blood">
                    <span class="service-badge">Popular</span>
                    <div class="service-icon">🩸</div>
                    <h3>Complete Blood Count (CBC)</h3>
                    <p class="description">Measures different components of blood including red blood cells, white blood cells, and platelets.</p>
                    <div class="test-details">
                        <p><i>⏰</i> Reports in: 4-6 hours</p>
                        <p><i>🍽️</i> Fasting: 8-10 hours required</p>
                        <p><i>🏠</i> Home sample: Available</p>
                    </div>
                    <div class="price-row">
                        <div class="price">Rs. 1,250 <small>+ Rs. 250 visit</small></div>
                        <button class="book-btn" onclick="openBookingModal('Complete Blood Count (CBC)', '1250')">Book Now</button>
                    </div>
                </div>

                <!-- Diabetes Profile -->
                <div class="lab-service-card" data-category="diabetes">
                    <div class="service-icon">💉</div>
                    <h3>Diabetes Profile (FBS/PPBS)</h3>
                    <p class="description">Complete diabetes screening including fasting blood sugar, post-prandial, and HbA1c.</p>
                    <div class="test-details">
                        <p><i>⏰</i> Reports in: 3-4 hours</p>
                        <p><i>🍽️</i> Fasting: 10-12 hours required</p>
                        <p><i>🏠</i> Home sample: Available</p>
                    </div>
                    <div class="price-row">
                        <div class="price">Rs. 1,850 <small>+ Rs. 250 visit</small></div>
                        <button class="book-btn" onclick="openBookingModal('Diabetes Profile', '1850')">Book Now</button>
                    </div>
                </div>

                <!-- Thyroid Profile -->
                <div class="lab-service-card" data-category="thyroid">
                    <span class="service-badge">-20%</span>
                    <div class="service-icon">🦋</div>
                    <h3>Thyroid Profile (T3, T4, TSH)</h3>
                    <p class="description">Complete thyroid function test to evaluate thyroid gland performance.</p>
                    <div class="test-details">
                        <p><i>⏰</i> Reports in: 6-8 hours</p>
                        <p><i>🍽️</i> Fasting: Not required</p>
                        <p><i>🏠</i> Home sample: Available</p>
                    </div>
                    <div class="price-row">
                        <div class="price">Rs. 2,450 <small>Rs. 3,050</small></div>
                        <button class="book-btn" onclick="openBookingModal('Thyroid Profile', '2450')">Book Now</button>
                    </div>
                </div>

                <!-- Lipid Profile -->
                <div class="lab-service-card" data-category="cardiac">
                    <div class="service-icon">❤️</div>
                    <h3>Lipid Profile</h3>
                    <p class="description">Measures cholesterol levels including HDL, LDL, and triglycerides for heart health.</p>
                    <div class="test-details">
                        <p><i>⏰</i> Reports in: 5-6 hours</p>
                        <p><i>🍽️</i> Fasting: 10-12 hours required</p>
                        <p><i>🏠</i> Home sample: Available</p>
                    </div>
                    <div class="price-row">
                        <div class="price">Rs. 1,550 <small>+ Rs. 250 visit</small></div>
                        <button class="book-btn" onclick="openBookingModal('Lipid Profile', '1550')">Book Now</button>
                    </div>
                </div>

                <!-- Liver Function Test -->
                <div class="lab-service-card" data-category="liver">
                    <div class="service-icon">🧬</div>
                    <h3>Liver Function Test (LFT)</h3>
                    <p class="description">Evaluates liver health by measuring enzymes, proteins, and bilirubin levels.</p>
                    <div class="test-details">
                        <p><i>⏰</i> Reports in: 6-8 hours</p>
                        <p><i>🍽️</i> Fasting: 8-10 hours required</p>
                        <p><i>🏠</i> Home sample: Available</p>
                    </div>
                    <div class="price-row">
                        <div class="price">Rs. 2,150 <small>+ Rs. 250 visit</small></div>
                        <button class="book-btn" onclick="openBookingModal('Liver Function Test', '2150')">Book Now</button>
                    </div>
                </div>

                <!-- Kidney Function Test -->
                <div class="lab-service-card" data-category="blood">
                    <div class="service-icon">🫀</div>
                    <h3>Kidney Function Test (KFT)</h3>
                    <p class="description">Assesses kidney health through blood urea, creatinine, and electrolyte levels.</p>
                    <div class="test-details">
                        <p><i>⏰</i> Reports in: 6-8 hours</p>
                        <p><i>🍽️</i> Fasting: 8-10 hours required</p>
                        <p><i>🏠</i> Home sample: Available</p>
                    </div>
                    <div class="price-row">
                        <div class="price">Rs. 1,950 <small>+ Rs. 250 visit</small></div>
                        <button class="book-btn" onclick="openBookingModal('Kidney Function Test', '1950')">Book Now</button>
                    </div>
                </div>

                <!-- Vitamin D Test -->
                <div class="lab-service-card" data-category="blood">
                    <span class="service-badge">New</span>
                    <div class="service-icon">☀️</div>
                    <h3>Vitamin D Test</h3>
                    <p class="description">Measures vitamin D levels in blood for bone health and immunity assessment.</p>
                    <div class="test-details">
                        <p><i>⏰</i> Reports in: 12-14 hours</p>
                        <p><i>🍽️</i> Fasting: Not required</p>
                        <p><i>🏠</i> Home sample: Available</p>
                    </div>
                    <div class="price-row">
                        <div class="price">Rs. 3,950 <small>+ Rs. 250 visit</small></div>
                        <button class="book-btn" onclick="openBookingModal('Vitamin D Test', '3950')">Book Now</button>
                    </div>
                </div>

                <!-- Full Body Checkup -->
                <div class="lab-service-card" data-category="blood">
                    <div class="service-icon">🔬</div>
                    <h3>Full Body Checkup (80+ Tests)</h3>
                    <p class="description">Comprehensive health screening including CBC, LFT, KFT, Lipid, Thyroid, and more.</p>
                    <div class="test-details">
                        <p><i>⏰</i> Reports in: 24 hours</p>
                        <p><i>🍽️</i> Fasting: 10-12 hours required</p>
                        <p><i>🏠</i> Home sample: Available</p>
                    </div>
                    <div class="price-row">
                        <div class="price">Rs. 5,990 <small>Rs. 12,500</small></div>
                        <button class="book-btn" onclick="openBookingModal('Full Body Checkup', '5990')">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- Home Collection Banner -->
            <div class="home-collection-banner">
                <div class="banner-content">
                    <h2>🏠 Free Home Sample Collection</h2>
                    <p>No need to visit the lab. Our trained phlebotomists will collect samples from your home at your preferred time.</p>
                    <div class="banner-features">
                        <div class="banner-feature">
                            <span>🕒</span>
                            <div>Flexible Timing<br><small>7 AM - 9 PM</small></div>
                        </div>
                        <div class="banner-feature">
                            <span>🚗</span>
                            <div>Free Collection<br><small>Within 10km</small></div>
                        </div>
                        <div class="banner-feature">
                            <span>📱</span>
                            <div>Digital Reports<br><small>Instant on App</small></div>
                        </div>
                    </div>
                </div>
                <button class="banner-btn" onclick="openHomeCollectionModal()">Schedule Collection</button>
            </div>

            <!-- Why Choose Us -->
            <div class="why-choose-us">
                <h2>Why Choose MediCare+ Lab?</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">🥇</div>
                        <h4>NABL Accredited</h4>
                        <p>International quality standards with regular proficiency testing</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">⚡</div>
                        <h4>Quick Reports</h4>
                        <p>Most reports delivered within 6-8 hours via SMS/Email/App</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">👨‍🔬</div>
                        <h4>Expert Team</h4>
                        <p>Qualified pathologists and experienced technicians</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🔬</div>
                        <h4>Advanced Technology</h4>
                        <p>Fully automated analyzers for accurate results</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Booking Modal -->
    <div class="modal" id="bookingModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="modalTestName">Book Test</h2>
                <span class="close-btn" onclick="closeModal()">&times;</span>
            </div>
            <form id="bookingForm" onsubmit="submitBooking(event)">
                <input type="hidden" id="testPrice" value="">
                
                <div class="form-group">
                    <label>Patient Name</label>
                    <input type="text" placeholder="Enter full name" required>
                </div>

                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="tel" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
                </div>

                <div class="form-group">
                    <label>Email (for reports)</label>
                    <input type="email" placeholder="Enter email address" required>
                </div>

                <div class="form-group">
                    <label>Age</label>
                    <input type="number" placeholder="Enter age" min="1" max="120" required>
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <select required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Collection Type</label>
                    <select id="collectionType" onchange="toggleAddress()" required>
                        <option value="home">Home Collection (+Rs. 250)</option>
                        <option value="lab">Visit Lab (Free)</option>
                    </select>
                </div>

                <div class="form-group" id="addressField">
                    <label>Home Address</label>
                    <textarea placeholder="Enter complete address with landmark" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label>Preferred Date</label>
                    <input type="date" id="preferredDate" min="" required>
                </div>

                <div class="form-group">
                    <label>Preferred Time</label>
                    <div class="time-slots" id="timeSlots">
                        <div class="time-slot" onclick="selectTimeSlot(this)">7 AM - 9 AM</div>
                        <div class="time-slot" onclick="selectTimeSlot(this)">9 AM - 11 AM</div>
                        <div class="time-slot" onclick="selectTimeSlot(this)">11 AM - 1 PM</div>
                        <div class="time-slot" onclick="selectTimeSlot(this)">1 PM - 3 PM</div>
                        <div class="time-slot" onclick="selectTimeSlot(this)">3 PM - 5 PM</div>
                        <div class="time-slot" onclick="selectTimeSlot(this)">5 PM - 7 PM</div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Any specific instructions?</label>
                    <textarea placeholder="e.g., Claustrophobia, need wheelchair assistance, etc." rows="2"></textarea>
                </div>

                <button type="submit" class="confirm-btn">Confirm Booking</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 MediCare+</p>
    </footer>

    <script>
        let selectedTimeSlot = null;
        let currentTestName = '';
        let currentPrice = '';

        // Set minimum date to today
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('preferredDate').min = today;
        });

        function searchTests() {
            const searchTerm = document.getElementById('testSearch').value.toLowerCase();
            const cards = document.querySelectorAll('.lab-service-card');
            
            cards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const desc = card.querySelector('.description').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || desc.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function filterTests(category) {
            // Update active tab
            document.querySelectorAll('.category-tab').forEach(tab => {
                tab.classList.remove('active');
            });
            event.target.classList.add('active');
            
            // Filter cards
            const cards = document.querySelectorAll('.lab-service-card');
            cards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function openBookingModal(testName, price) {
            currentTestName = testName;
            currentPrice = price;
            document.getElementById('modalTestName').textContent = 'Book ' + testName;
            document.getElementById('testPrice').value = price;
            document.getElementById('bookingModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function openHomeCollectionModal() {
            openBookingModal('Home Sample Collection', '0');
        }

        function closeModal() {
            document.getElementById('bookingModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        function toggleAddress() {
            const collectionType = document.getElementById('collectionType').value;
            const addressField = document.getElementById('addressField');
            
            if (collectionType === 'home') {
                addressField.style.display = 'block';
            } else {
                addressField.style.display = 'none';
            }
        }

        function selectTimeSlot(element) {
            // Remove selected class from all slots
            document.querySelectorAll('.time-slot').forEach(slot => {
                slot.classList.remove('selected');
            });
            
            // Add selected class to clicked slot
            element.classList.add('selected');
            selectedTimeSlot = element.textContent;
        }

        function submitBooking(event) {
            event.preventDefault();
            
            // Validate time slot
            if (!selectedTimeSlot) {
                alert('Please select a preferred time slot');
                return;
            }
            
            // Show success message
            const successMsg = document.getElementById('bookingSuccess');
            successMsg.style.display = 'block';
            
            // Close modal
            closeModal();
            
            // Scroll to success message
            successMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                successMsg.style.display = 'none';
            }, 5000);
            
            // Reset form
            document.getElementById('bookingForm').reset();
            document.querySelectorAll('.time-slot').forEach(slot => {
                slot.classList.remove('selected');
            });
            selectedTimeSlot = null;
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('bookingModal');
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>