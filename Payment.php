<?php
// payment.php
session_start();
require_once 'config/database.php';

// For demo purposes - set a sample user
$_SESSION['user_id'] = 1;
$_SESSION['user_name'] = 'Demo User';
$_SESSION['user_email'] = 'demo@example.com';

$database = new Database();
$db = $database->getConnection();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $amount = $_POST['amount'] ?? 0;
    $payment_method = $_POST['payment_method'] ?? '';
    
    // Generate transaction ID
    $transaction_id = 'TXN' . time() . rand(100, 999);
    
    // Save to database
    $query = "INSERT INTO payments (user_id, name, email, amount, payment_method, transaction_id, status) 
              VALUES (:user_id, :name, :email, :amount, :payment_method, :transaction_id, 'completed')";
    
    $stmt = $db->prepare($query);
    $stmt->bindParam(':user_id', $_SESSION['user_id']);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':amount', $amount);
    $stmt->bindParam(':payment_method', $payment_method);
    $stmt->bindParam(':transaction_id', $transaction_id);
    
    if ($stmt->execute()) {
        $payment_id = $db->lastInsertId();
        
        // Save to payment history
        $history_query = "INSERT INTO payment_history (payment_id, user_id, name, email, amount, method, status) 
                         VALUES (:payment_id, :user_id, :name, :email, :amount, :method, 'completed')";
        $history_stmt = $db->prepare($history_query);
        $history_stmt->bindParam(':payment_id', $payment_id);
        $history_stmt->bindParam(':user_id', $_SESSION['user_id']);
        $history_stmt->bindParam(':name', $name);
        $history_stmt->bindParam(':email', $email);
        $history_stmt->bindParam(':amount', $amount);
        $history_stmt->bindParam(':method', $payment_method);
        $history_stmt->execute();
        
        // Send email receipt
        if (file_exists('includes/email.php')) {
            require_once 'includes/email.php';
            $emailService = new EmailService();
            $payment_details = [
                'transaction_id' => $transaction_id,
                'amount' => $amount,
                'payment_date' => date('Y-m-d H:i:s')
            ];
            $emailService->sendPaymentReceipt($email, $name, $payment_details);
        }
        
        // Show success message
        echo "<script>
            alert('✅ Payment successful! Transaction ID: " . $transaction_id . "');
            window.location.href = 'PaymentHist.php';
        </script>";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - MediCare+</title>
    <link rel="stylesheet" href="./Payment.css">
    <style>
        .payment-container { max-width: 500px; margin: 50px auto; padding: 30px; background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        h2 { text-align: center; color: #006666; margin-bottom: 30px; }
        input, select, button { width: 100%; padding: 12px; margin: 8px 0; border: 1px solid #ddd; border-radius: 5px; }
        button[type="submit"] { background: #006666; color: white; font-weight: bold; cursor: pointer; }
        button[type="submit"]:hover { background: #004d4d; }
        button[type="reset"] { background: #f0f0f0; }
        .success-message { display: none; background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-top: 20px; text-align: center; }
    </style>
</head>
<body>
    <div class="payment-container">
        <h2>💳 Payment Form</h2>
        
        <!-- Demo Notice -->
        <div style="background: #e7f3ff; padding: 10px; border-radius: 5px; margin-bottom: 20px; font-size: 14px;">
            <strong>Demo Mode:</strong> Your payments will be saved to database and shown in history.
        </div>
        
        <form method="POST" action="">
            <input type="text" name="name" id="name" placeholder="Full Name" value="Demo User" required>
            <input type="email" name="email" id="email" placeholder="Email Address" value="demo@example.com" required>
            <input type="number" name="amount" id="amount" placeholder="Amount (LKR)" value="1500" required min="1">
            
            <select name="payment_method" id="paymentMethod" required>
                <option value="">Select Payment Method</option>
                <option value="credit_card" selected>Credit / Debit Card</option>
                <option value="paypal">PayPal</option>
                <option value="bank_transfer">Bank Transfer</option>
            </select>
            
            <!-- Test card details for demo -->
            <div style="background: #f8f9fa; padding: 10px; border-radius: 5px; margin: 15px 0; font-size: 13px;">
                <strong>Test Card:</strong> 4242 4242 4242 4242 | Exp: 12/25 | CVV: 123
            </div>
            
            <button type="submit">Pay Now</button>
            <button type="reset">Cancel</button>
        </form>
        
        <div class="success-message" id="successMessage">
            Payment Successful! ✅
        </div>
    </div>
</body>
</html>