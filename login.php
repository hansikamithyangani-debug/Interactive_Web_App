<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<header>
    <h1>User Login</h1>
</header>

<section class="form-box">
    <label>Email</label>
    <input type="email" id="loginEmail">

    <label>Password</label>
    <input type="password" id="loginPassword">

    <button onclick="login()">Login</button>

    <p id="loginMsg"></p>
    <p>New user? <a href="./signup.php">Sign Up</a></p>
</section>

<script src="./js/app.js"></script>
</body>
</html>
