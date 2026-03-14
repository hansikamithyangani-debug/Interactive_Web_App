<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare+ - Request Ambulance</title>
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

        /* Ambulance Request Form Page */
        .ambulance-page {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: calc(100vh - 100px);
            padding: 40px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ambulance-container {
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
        }

        .ambulance-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            animation: slideUp 0.5s ease;
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

        .ambulance-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .ambulance-header .emergency-icon {
            font-size: 60px;
            margin-bottom: 15px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .ambulance-header h1 {
            color: #dc3545;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .ambulance-header p {
            color: #666;
            font-size: 16px;
        }

        .emergency-badge {
            background: #dc3545;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 15px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
            font-size: 14px;
        }

        .form-group label i {
            margin-right: 8px;
            color: #dc3545;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #dc3545;
            outline: none;
            box-shadow: 0 0 0 3px rgba(220,53,69,0.1);
        }

        select.form-control {
            cursor: pointer;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        .emergency-options {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .emergency-option {
            position: relative;
        }

        .emergency-option input[type="radio"] {
            position: absolute;
            opacity: 0;
        }

        .emergency-option label {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 15px;
            background: #f8f9fa;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s;
            margin: 0;
        }

        .emergency-option input[type="radio"]:checked + label {
            border-color: #dc3545;
            background: #fff5f5;
        }

        .emergency-option label span {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .emergency-option label small {
            font-size: 12px;
            color: #666;
        }

        .request-btn {
            width: 100%;
            padding: 15px;
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .request-btn:hover {
            background: #c82333;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(220,53,69,0.3);
        }

        .emergency-contact {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px dashed #e0e0e0;
            text-align: center;
        }

        .emergency-contact h4 {
            color: #333;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .emergency-contact .phone-numbers {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .emergency-contact .phone-numbers a {
            color: #dc3545;
            text-decoration: none;
            font-size: 20px;
            font-weight: 700;
            transition: color 0.3s;
        }

        .emergency-contact .phone-numbers a:hover {
            color: #c82333;
        }

        .emergency-note {
            background: #fff3cd;
            border: 1px solid #ffeeba;
            color: #856404;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .emergency-note i {
            font-size: 20px;
        }

        /* Footer styling */
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
            
            .ambulance-card {
                padding: 25px;
            }
            
            .emergency-options {
                grid-template-columns: 1fr;
            }
            
            .emergency-contact .phone-numbers {
                flex-direction: column;
                gap: 10px;
            }
            
            .ambulance-header h1 {
                font-size: 28px;
            }
        }

        /* Success message animation */
        .success-message {
            display: none;
            background: #28a745;
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
                <a href="./index.html">MediCare+</a>
            </div>

            <ul class="nav-links">
                <li><a href="./Home1.html">Home</a></li>
                <li><a href="./about.html">About</a></li>
                <li><a href="./appointment.html">Add appointment</a></li>
                <li><a href="./appointments.html">View appointments</a></li>
                <li><a href="./Contact.html">Contact</a></li>
            </ul>

            <a href="./index.html" class="btn-primary-nav">Get Started</a>
        </nav>
    </header>

    <!-- Ambulance Request Form -->
    <main class="ambulance-page">
        <div class="ambulance-container">
            <div class="ambulance-card">
                <div class="success-message" id="successMessage">
                    🚑 Emergency request sent! Ambulance is on the way. Please stay calm and wait at your location.
                </div>

                <div class="ambulance-header">
                    <div class="emergency-icon">🚑</div>
                    <span class="emergency-badge">24/7 EMERGENCY SERVICE</span>
                    <h1>Request Ambulance</h1>
                    <p>Immediate assistance at your location. Our team will reach you within minutes.</p>
                </div>

                <form id="ambulanceForm" onsubmit="submitAmbulanceRequest(event)">
                    <!-- Emergency Type -->
                    <div class="form-group">
                        <label><i>⚠️</i> Emergency Type</label>
                        <div class="emergency-options">
                            <div class="emergency-option">
                                <input type="radio" name="emergencyType" id="cardiac" value="cardiac" required>
                                <label for="cardiac">
                                    <span>❤️</span>
                                    Cardiac
                                    <small>Heart Attack</small>
                                </label>
                            </div>
                            <div class="emergency-option">
                                <input type="radio" name="emergencyType" id="accident" value="accident">
                                <label for="accident">
                                    <span>🚗</span>
                                    Accident
                                    <small>Vehicle/Trauma</small>
                                </label>
                            </div>
                            <div class="emergency-option">
                                <input type="radio" name="emergencyType" id="pregnancy" value="pregnancy">
                                <label for="pregnancy">
                                    <span>🤰</span>
                                    Pregnancy
                                    <small>Maternity</small>
                                </label>
                            </div>
                            <div class="emergency-option">
                                <input type="radio" name="emergencyType" id="other" value="other">
                                <label for="other">
                                    <span>🆘</span>
                                    Other
                                    <small>Emergency</small>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Patient Name -->
                    <div class="form-group">
                        <label><i>👤</i> Patient Name</label>
                        <input type="text" class="form-control" placeholder="Enter patient full name" required>
                    </div>

                    <!-- Contact Number -->
                    <div class="form-group">
                        <label><i>📞</i> Contact Number</label>
                        <input type="tel" class="form-control" placeholder="Enter mobile number" pattern="[0-9]{10}" required>
                    </div>

                    <!-- Alternate Contact -->
                    <div class="form-group">
                        <label><i>📱</i> Alternate Contact (Optional)</label>
                        <input type="tel" class="form-control" placeholder="Enter alternate number">
                    </div>

                    <!-- Location -->
                    <div class="form-group">
                        <label><i>📍</i> Pickup Location</label>
                        <input type="text" class="form-control" placeholder="Enter complete address" required>
                    </div>

                    <!-- District/City -->
                    <div class="form-group">
                        <label><i>🏙️</i> District/City</label>
                        <select class="form-control" required>
                            <option value="">Select District</option>
                            <option value="colombo">Colombo</option>
                            <option value="gampaha">Gampaha</option>
                            <option value="kalutara">Kalutara</option>
                            <option value="kandy">Kandy</option>
                            <option value="galle">Galle</option>
                            <option value="matara">Matara</option>
                            <option value="jaffna">Jaffna</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <!-- Landmark -->
                    <div class="form-group">
                        <label><i>🏛️</i> Landmark (Optional)</label>
                        <input type="text" class="form-control" placeholder="Nearby hospital, mosque, temple, etc.">
                    </div>

                    <!-- Additional Information -->
                    <div class="form-group">
                        <label><i>📝</i> Additional Information</label>
                        <textarea class="form-control" placeholder="Any specific medical conditions or special requirements..."></textarea>
                    </div>

                    <!-- Emergency Note -->
                    <div class="emergency-note">
                        <i>⏰</i>
                        <span>Our ambulance will reach you within 15-20 minutes depending on traffic. Stay calm and keep the line open.</span>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="request-btn">
                        <span>🚑</span>
                        REQUEST EMERGENCY AMBULANCE
                        <span>⚡</span>
                    </button>
                </form>

                <!-- Emergency Contact Numbers -->
                <div class="emergency-contact">
                    <h4>📞 For Immediate Assistance Call:</h4>
                    <div class="phone-numbers">
                        <a href="tel:1990">1990</a>
                        <a href="tel:110">110</a>
                        <a href="tel:011-2691111">011-2691111</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 MediCare+</p>
    </footer>

    <script>
        function submitAmbulanceRequest(event) {
            event.preventDefault();
            
            // Show success message
            const successMsg = document.getElementById('successMessage');
            successMsg.style.display = 'block';
            
            // Play emergency sound (optional - you can add a sound effect)
            // new Audio('./ambulance-sound.mp3').play();
            
            // Scroll to success message
            successMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            // Redirect after 3 seconds
            setTimeout(function() {
                window.location.href = './ambulance-tracking.html'; // You can create a tracking page
            }, 3000);
        }

        // Form validation
        document.getElementById('ambulanceForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.querySelector('input[placeholder="Enter patient full name"]').value;
            const phone = document.querySelector('input[placeholder="Enter mobile number"]').value;
            const location = document.querySelector('input[placeholder="Enter complete address"]').value;
            const emergencyType = document.querySelector('input[name="emergencyType"]:checked');
            
            // Basic validation
            if(!name || !phone || !location || !emergencyType) {
                alert('Please fill in all required fields');
                return;
            }
            
            if(phone.length !== 10 || !/^\d+$/.test(phone)) {
                alert('Please enter a valid 10-digit phone number');
                return;
            }
            
            // Submit the request
            submitAmbulanceRequest(e);
        });

        // Auto-detect location (optional)
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }

        function showPosition(position) {
            console.log("Latitude: " + position.coords.latitude + 
                        " Longitude: " + position.coords.longitude);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>