<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctor Appointment System</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


<style>
   .card{
transition: 0.3s;
margin-bottom: 20px;
background-color: rgb(95, 223, 127);
}

.card:hover{
transform: translateY(-10px);
box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

.card img{
   width:70px;
    height:70px;
    border-radius:70%;
    border:3px solid #333;
    display:center;
    margin:10px auto 15px auto;
}
</style>

</head>
<body>
    <div id="welcomeAlert" class="welcome-alert hidden">
    Welcome to the Online Doctor Appointment System!
</div>

<div id="successAlert" class="success-alert hidden">
    You successfully booked an appointment!
</div>


<nav class="navbar navbar-expand-lg bg-success-subtle">

  <div class="container-fluid">
<div class="left-section">
  
    
  
  <nav class="navbar">
    <span  id="menuBtn" class="menu-btn" onclick="toggleMenu()">
      <span></span>
      <span></span>
      <span></span>
    </span>
    
</nav>

<div id="sidebar" class="sidebar">
    <a href="./Profile.php">Contact Your Doctor</a>
    <a href="./Payment.php">View Payment Details</a>
    <a href="./PaymentHist.php">Payment History</a>
    <a href="./Timeslots.php">Time Slots</a>
    <a href="./Services.php">Other Services</a>
</div>

     <a class="navbar-brand" href="#">
      <img src="./images/medicare (1).png " alt="" width="30" height="24" class="d-inline-block align-text-top">
      <h1>MediCare+</h1>
    </a>
    
      
   
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./appointment.php">Add appointment</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="./appointments.php">View appoinments</a>
        </li>
      </ul>
      <form class="d-flex">
  <button class="btn btn-outline-success  " type="button" onclick="location.href='./login.php'">
    Login
  </button>

  <button class="btn btn-outline-success  " type="button"
          onclick="location.href='./signup.php'">
    Signup
  </button>
</form>
</div>

    </div>
    

</nav>



<section class="hero">
  
    <h2 style="font-size:xx-large ;color: #a732a1;">Book Doctor Appointments Online</h2>
    <p style="font-size: larger;">Easy, fast and reliable healthcare appointment system.</p>

    <div class="container mt-4">
  <div class="row">

    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="card">
        <img src="./images/image copy 2.png" class="card-img-top img-fluid" alt="image">
        <div class="card-body">
          <h5 class="card-title">Dr.Silva</h5>
          <p class="card-text">
         Cardiologist  </p>
          <a href="./Profile.php" class="btn btn-primary">View Profile</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="card">
        <img src="./images/image copy 2.png" class="card-img-top img-fluid" alt="image">
        <div class="card-body">
          <h5 class="card-title">Dr.Gunawardana</h5>
          <p class="card-text">
         Dematologist  </p>
          <a href="./Profile.php" class="btn btn-primary">View Profile</a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="card">
        <img src="./images/image copy 2.png" class="card-img-top img-fluid" alt="image">
        <div class="card-body">
          <h5 class="card-title">Dr.fernando</h5>
          <p class="card-text">
      Pediatrician  </p>
          <a href="./Profile.php" class="btn btn-primary">View Profile</a>
        </div>
      </div>
    </div>
</div>
</div>

</section>

<footer>
    &copy; 2026 MediCare+
</footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="./js/app.js"></script>

</body>
</html>
