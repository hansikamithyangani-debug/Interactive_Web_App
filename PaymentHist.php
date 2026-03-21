<?php
// PaymentHist.php
session_start();
require_once 'config/database.php';

// Demo user
$_SESSION['user_id'] = 1;

$database = new Database();
$db = $database->getConnection();

// Get payment history
$query = "SELECT * FROM payment_history WHERE user_id = :user_id ORDER BY payment_date DESC";
$stmt = $db->prepare($query);
$stmt->bindParam(':user_id', $_SESSION['user_id']);
$stmt->execute();
$payments = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Calculate total
$total = 0;
foreach ($payments as $p) $total += $p['amount'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment History - MediCare+</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; margin: 0; padding: 20px; }
        .container { max-width: 1000px; margin: 0 auto; }
        h2 { color: #006666; }
        .summary-card { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; border-radius: 10px; margin-bottom: 20px; }
        .summary-number { font-size: 2rem; font-weight: bold; }
        table { width: 100%; background: white; border-collapse: collapse; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        th { background: #006666; color: white; padding: 12px; text-align: left; }
        td { padding: 12px; border-bottom: 1px solid #ddd; }
        tr:hover { background: #f5f5f5; }
        .status-badge { background: #28a745; color: white; padding: 3px 8px; border-radius: 12px; font-size: 12px; }
        .no-data { text-align: center; padding: 50px; color: #666; }
        .btn { display: inline-block; padding: 10px 20px; background: #006666; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px; }
        .btn:hover { background: #004d4d; }
    </style>
</head>
<body>
    <div class="container">
        <h2>💰 Payment History</h2>
        
        <!-- Summary Card -->
        <div class="summary-card">
            <div style="display: flex; justify-content: space-between;">
                <div>
                    <p>Total Transactions</p>
                    <div class="summary-number"><?php echo count($payments); ?></div>
                </div>
                <div>
                    <p>Total Spent</p>
                    <div class="summary-number">LKR <?php echo number_format($total, 2); ?></div>
                </div>
            </div>
        </div>
        
        <!-- Payment History Table -->
        <table id="historyTable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Amount</th>
                    <th>Method</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($payments) > 0): ?>
                    <?php foreach ($payments as $payment): ?>
                    <tr>
                        <td><?php echo date('Y-m-d H:i', strtotime($payment['payment_date'])); ?></td>
                        <td><?php echo htmlspecialchars($payment['name']); ?></td>
                        <td><?php echo htmlspecialchars($payment['email']); ?></td>
                        <td><strong>LKR <?php echo number_format($payment['amount'], 2); ?></strong></td>
                        <td><?php echo ucwords(str_replace('_', ' ', $payment['method'])); ?></td>
                        <td><span class="status-badge"><?php echo $payment['status']; ?></span></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="no-data">
                            <h3>No payment history found</h3>
                            <p>Make your first payment to see it here.</p>
                            <a href="payment.php" class="btn">Make a Payment</a>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>