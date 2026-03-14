fetch('/api/savePayment', {
  method: 'POST',
  headers: {'Content-Type': 'application/json'},
  body: JSON.stringify({
    userId: currentUser.id,
    name: name,
    email: email,
    amount: amount,
    method: paymentMethod,
    date: new Date()
  })
})
.then(res => res.json())
.then(data => {
  alert("Payment Successful!");
});