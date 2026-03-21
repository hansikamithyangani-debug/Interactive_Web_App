document.addEventListener("DOMContentLoaded", () => {
    if (!sessionStorage.getItem("visited")) {
        alert("Welcome to the Online Doctor Appointment System!");
        sessionStorage.setItem("visited", "true");
    }
});


// Save appointment (using localStorage for now)
function bookAppointment() {
    const appointment = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        doctor: document.getElementById("doctor").value,
        date: document.getElementById("date").value,
        time: document.getElementById("time").value
    };

    let appointments = JSON.parse(localStorage.getItem("appointments")) || [];
    appointments.push(appointment);
    localStorage.setItem("appointments", JSON.stringify(appointments));

    document.getElementById("msg").innerText =
        "Appointment booked successfully!";
}

// Display appointments
if (document.getElementById("appointmentList")) {
    let appointments = JSON.parse(localStorage.getItem("appointments")) || [];
    let list = document.getElementById("appointmentList");

    appointments.forEach(a => {
        let row = `
            <tr>
                <td>${a.name}</td>
                <td>${a.doctor}</td>
                <td>${a.date}</td>
                <td>${a.time}</td>
            </tr>
        `;
        list.innerHTML += row;
    });
}

// ---------- NAVBAR AUTH CONTROL ----------
document.addEventListener("DOMContentLoaded", () => {
    const authButtons = document.getElementById("authButtons");
    const logoutBtn = document.getElementById("logoutBtn");

    if (!authButtons || !logoutBtn) return;

    if (localStorage.getItem("loggedInUser")) {
        authButtons.classList.add("hidden");
        logoutBtn.classList.remove("hidden");
    } else {
        authButtons.classList.remove("hidden");
        logoutBtn.classList.add("hidden");
    }
});

// ---------- LOGOUT ----------
function logout() {
    localStorage.removeItem("loggedInUser");
    window.location.href = "index.php";
}


// ---------- SIGN UP ----------
function signup() {
    const user = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        password: document.getElementById("password").value
    };

    if (!user.name || !user.email || !user.password) {
        document.getElementById("msg").innerText = "All fields required!";
        return;
    }

    let users = JSON.parse(localStorage.getItem("users")) || [];

    if (users.find(u => u.email === user.email)) {
        document.getElementById("msg").innerText = "User already exists!";
        return;
    }

    users.push(user);
    localStorage.setItem("users", JSON.stringify(users));

    document.getElementById("msg").innerText =
        "Registration successful! Please login.";
}

// ---------- LOGIN ----------
function login() {
    const email = document.getElementById("loginEmail").value;
    const password = document.getElementById("loginPassword").value;

    let users = JSON.parse(localStorage.getItem("users")) || [];

    const validUser = users.find(
        u => u.email === email && u.password === password
    );

    if (validUser) {
        localStorage.setItem("loggedInUser", email);
        window.location.href = "appointment.php";
    } else {
        document.getElementById("loginMsg").innerText =
            "Invalid email or password!";
    }
}

// ---------- AUTH CHECK ----------
function checkAuth() {
    if (!localStorage.getItem("loggedInUser")) {
        window.location.href = "login.php";
    }
}



function showNotification(message) {
    const notification = document.getElementById("notification");
    notification.textContent = message;
    notification.classList.remove("hidden");

    setTimeout(() => {
        notification.classList.add("hidden");
    }, 3000); // disappears after 3 seconds
}

// ---------- NAVBAR AUTH CONTROL ----------
document.addEventListener("DOMContentLoaded", () => {
    const authButtons = document.getElementById("authButtons");
    const logoutBtn = document.getElementById("logoutBtn");

    if (!authButtons || !logoutBtn) return;

    if (localStorage.getItem("loggedInUser")) {
        authButtons.classList.add("hidden");
        logoutBtn.classList.remove("hidden");
    } else {
        authButtons.classList.remove("hidden");
        logoutBtn.classList.add("hidden");
    }
});

// ---------- LOGOUT ----------
function logout() {
    localStorage.removeItem("loggedInUser");
    window.location.href = "index.php";
}

function showSuccessNotification(message) {
    const notification = document.getElementById("successNotification");
    notification.textContent = message;
    notification.classList.remove("hidden");

    setTimeout(() => {
        notification.classList.add("hidden");
    }, 3000); // hide after 3 seconds
}

document.addEventListener("DOMContentLoaded", () => {
    const alertBox = document.getElementById("welcomeAlert");

    if (!alertBox) return;

    // show alert only once per session
    if (!sessionStorage.getItem("welcomeShown")) {
        alertBox.classList.remove("hidden");

        // AUTO DISAPPEAR TIME (milliseconds)
        setTimeout(() => {
            alertBox.classList.add("hidden");
        }, 5000); // 5 seconds

        sessionStorage.setItem("welcomeShown", "true");
    }
});


function toggleMenu(){
    document.getElementById("sidebar").classList.toggle("show");
}

function toggleMenu(){
    document.getElementById("sidebar").classList.toggle("show");
    document.body.classList.toggle("shift");
}


