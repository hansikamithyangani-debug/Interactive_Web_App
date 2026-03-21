<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="./cs/style.css">
    
</head>
<body>

<header>
    <h1>Book Appointment</h1>
</header>

<section class="form-box">
    <label>Patient Name</label>
    <input type="text" id="name">

    <label>Email</label>
    <input type="email" id="email">

    <label>Select Doctor</label>
    <select id="doctor">
        <option>Dr. Silva (Cardiology)</option>
        <option>Dr. Perera (Dermatology)</option>
        <option>Dr. Fernando (Pediatrics)</option>
    </select>

    <label>Date</label>
    <input type="date" id="date">

    <label>Time</label>
    <input type="time" id="time">

    <button onclick="bookAppointment()">Book Appointment</button>

    <p id="msg"></p>
</section>
<!-- Success Notification -->
<div id="successNotification" class="notification hidden">
    Appointment added successfully!
</div>


<script src="./js/app.js"></script>



</body>
</html>
