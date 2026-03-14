<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Razorpay Payment</title>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<style>
    button { padding: 10px 20px; font-size: 16px; margin: 10px; cursor: pointer; }
</style>
</head>
<body>

<h2>Choose Payment Method</h2>
<button onclick="payNow(500)">Pay ₹500</button>
<button onclick="payNow(1000)">Pay ₹1000</button>

<div id="result" style="margin-top:20px; font-weight:bold;"></div>

<script>
async function payNow(amount) {
    // 1️⃣ Create order from backend
    const response = await fetch("http://localhost:3000/create-order", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ amount: amount, currency: "INR" })
    });
    const order = await response.json();

    // 2️⃣ Razorpay payment options
    var options = {
        "key": "YOUR_RAZORPAY_KEY_ID",
        "amount": order.amount,
        "currency": order.currency,
        "name": "My Web App",
        "description": "Test Payment",
        "order_id": order.id,
        "handler": async function (response) {
            // Payment success
            document.getElementById("result").innerHTML = 
                "Payment Successful!<br>" +
                "Payment ID: " + response.razorpay_payment_id + "<br>" +
                "Order ID: " + response.razorpay_order_id + "<br>" +
                "Signature: " + response.razorpay_signature;

            // Optionally verify payment on backend
            /*
            await fetch("http://localhost:3000/verify-payment", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(response)
            });
            */
        },
        "prefill": {
            "name": "John Doe",
            "email": "john@example.com",
            "contact": "9999999999"
        },
        "theme": {
            "color": "#528FF0"
        }
    };
    var rzp = new Razorpay(options);
    rzp.open();
}
</script>

</body>
</html>