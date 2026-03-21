<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare+ - Other Services</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        /* Make carousel fill the viewport */
        #carouselExampleCaptions {
            height: calc(100vh - 100px); /* Adjusted for smaller header (60px) and footer (40px) */
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        /* Ensure images scale properly */
        #carouselExampleCaptions .carousel-item {
            height: calc(100vh - 100px);
            position: relative;
        }

        #carouselExampleCaptions .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            filter: brightness(0.7);
        }

        /* Header/Navbar styling - DECREASED HEIGHT */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: white;
            padding: 8px 40px; /* Reduced from 15px to 8px */
            
            font-family: Arial, sans-serif;
            min-height: 60px; /* Set fixed minimum height */
        }

        .navbar .logo a {
            color: #006666;
            font-size: 24px; /* Slightly reduced from 28px */
            font-weight: 700;
            text-decoration: none;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .nav-links {
            display: flex;
            gap: 25px; /* Slightly reduced from 30px */
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links li a {
            color: #2c3e50;
            text-decoration: none;
            font-size: 15px; /* Slightly reduced from 16px */
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
            padding: 8px 22px; /* Reduced from 10px 25px */
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px; /* Added font size */
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn-primary-nav:hover {
            background: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,123,255,0.3);
        }

        

        
        
       

        

        /* Footer styling - slightly reduced height */
        footer {
            background: #006666;
            color: white;
            text-align: center;
            padding: 10px; /* Reduced from 15px */
            font-family: Arial, sans-serif;
            position: relative;
            bottom: 0;
            width: 100%;
            font-size: 14px; /* Slightly reduced */
            min-height: 40px; /* Set minimum height */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        footer p {
            margin: 0;
            color: white;
        }

        /* Carousel control buttons */
        .carousel-control-prev,
        .carousel-control-next {
            opacity: 0.7;
            width: 5%;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            opacity: 1;
        }

        /* Carousel indicators */
        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 6px;
            background-color: rgba(255,255,255,0.5);
        }

        .carousel-indicators .active {
            background-color: white;
        }

        /* Responsive design */
        @media (max-width: 992px) {
            .navbar {
                padding: 8px 20px; /* Reduced from 12px */
            }
            
            .nav-links {
                gap: 18px; /* Reduced from 20px */
            }
            
            .navbar .logo a {
                font-size: 22px; /* Reduced from 24px */
            }
            
            .btn-primary-nav {
                padding: 6px 18px; /* Reduced */
                font-size: 13px;
            }
            
            #carouselExampleCaptions .carousel-caption h1 {
                font-size: 2.8rem;
            }
            
            #carouselExampleCaptions .carousel-caption h1 span {
                font-size: 2.5rem;
            }
            
            #carouselExampleCaptions {
                height: calc(100vh - 90px); /* Adjusted */
            }
            
            #carouselExampleCaptions .carousel-item {
                height: calc(100vh - 90px);
            }
        }

        @media (max-width: 768px) {
            .navbar {
                flex-wrap: wrap;
                padding: 8px 15px; /* Reduced */
                min-height: 50px;
            }
            
            .nav-links {
                order: 3;
                width: 100%;
                justify-content: center;
                margin-top: 5px; /* Reduced from 10px */
                gap: 12px; /* Reduced from 15px */
                flex-wrap: wrap;
            }
            
            .navbar .logo a {
                font-size: 20px; /* Reduced from 22px */
            }
            
            .btn-primary-nav {
                padding: 6px 16px;
                font-size: 13px;
            }
            
            #carouselExampleCaptions .carousel-caption {
                width: 90%;
            }
            
            #carouselExampleCaptions .carousel-caption h1 {
                font-size: 2.2rem;
            }
            
            #carouselExampleCaptions .carousel-caption h1 span {
                font-size: 2rem;
            }
            
            #carouselExampleCaptions .carousel-caption p {
                font-size: 1rem;
            }
            
            #carouselExampleCaptions .carousel-caption .badge-custom {
                font-size: 1rem;
            }
            
            #carouselExampleCaptions {
                height: calc(100vh - 80px); /* Adjusted */
            }
            
            #carouselExampleCaptions .carousel-item {
                height: calc(100vh - 80px);
            }
            
            footer {
                padding: 8px;
                font-size: 13px;
                min-height: 35px;
            }
        }

        @media (max-width: 576px) {
            .navbar {
                padding: 6px 10px; /* Reduced */
                min-height: 45px;
            }
            
            .navbar .logo a {
                font-size: 18px; /* Reduced from 20px */
            }
            
            .nav-links {
                gap: 8px; /* Reduced from 10px */
                margin-top: 3px;
            }
            
            .nav-links li a {
                font-size: 12px; /* Reduced from 14px */
            }
            
            .btn-primary-nav {
                padding: 5px 12px; /* Reduced */
                font-size: 11px;
            }
            
            #carouselExampleCaptions .carousel-caption h1 {
                font-size: 1.5rem; /* Slightly reduced */
            }
            
            #carouselExampleCaptions .carousel-caption h1 span {
                font-size: 1.3rem; /* Slightly reduced */
            }
            
            #carouselExampleCaptions .carousel-caption p {
                font-size: 0.8rem;
                margin-bottom: 0.8rem;
            }
            
            #carouselExampleCaptions .carousel-caption .btn-outline-custom {
                padding: 6px 16px;
                font-size: 0.8rem;
            }
            
            footer {
                padding: 6px;
                font-size: 12px;
                min-height: 30px;
            }
            
            #carouselExampleCaptions {
                height: calc(100vh - 70px); /* Adjusted */
            }
            
            #carouselExampleCaptions .carousel-item {
                height: calc(100vh - 70px);
            }
        }

        /* Ensure full width and no overflow */
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
    </style>
</head>
<body>
    <!-- Header/Navbar  -->
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

    <!-- Main content with carousel -->
    <main>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="./images/carousel2.jpg" class="d-block w-100" alt="Healthcare">
                    <div class="carousel-caption">
                        <span class="badge-custom">🔬 Diagnostic Imaging</span>
<h1>Precision X-Ray, <span>Accurate Results</span></h1>
<p>State-of-the-art digital X-ray services with instant reporting. Our advanced imaging technology ensures clear, precise diagnostics for better treatment planning — safe, quick, and reliable.</p>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="./images/carousel3.jpg" class="d-block w-100" alt="Healthcare">
                    <div class="carousel-caption">
                        <span class="badge-custom">👨‍⚕️ Doctor Consultations</span>
<h1>Expert Doctors, <span>Instant Access</span></h1>
<p>Connect with Sri Lanka's top specialists through our e-channelling platform. Book appointments, video consultations, and follow-ups with trusted doctors — from the comfort of your home.</p>
<a href="./Profile.php" class="btn-outline-custom">Channel a Doctor</a>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="./images/carousel5.jpg" class="d-block w-100" alt="Healthcare">
                    <div class="carousel-caption">
                        <span class="badge-custom">💊 Online Pharmacy</span>
<h1>Medicines Delivered, <span>Health Assured</span></h1>
<p>Sri Lanka's most trusted online pharmacy network. Get genuine prescription medicines, healthcare products, and wellness essentials delivered to your doorstep — anytime, anywhere.</p>
                </div>
            </div>

            <div class="carousel-item">
                    <img src="./images/ambulance.jpg" class="d-block w-100" alt="Healthcare">
                    <div class="carousel-caption">
                        <span class="badge-custom">🚑 Emergency Response</span>
<h1>Rapid Ambulance, <span>Life-Saving Speed</span></h1>
<p>24/7 emergency ambulance services with advanced life support systems. Our trained paramedics and modern fleet ensure you reach the hospital safely — when every second counts.</p>
<a href="./Ambulance.php" class="btn-outline-custom">Request Ambulance</a>
                </div>
            </div>

            <div class="carousel-item">
                    <img src="./images/carousel7.jpg" class="d-block w-100" alt="Healthcare">
                    <div class="carousel-caption">
                        <span class="badge-custom">🧪 Diagnostic Lab</span>
<h1>Accurate Testing, <span>Trusted Reports</span></h1>
<p>Comprehensive laboratory services with cutting-edge technology. From routine blood tests to specialized diagnostics, get accurate results quickly with home sample collection available.</p>
<a href="./Lab.php" class="btn-outline-custom">Explore Lab Services</a>
                </div>
            </div>

            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 MediCare+</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
</body>
</html>