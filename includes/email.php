<?php
// includes/email.php - Email service using PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once __DIR__ . '/../vendor/autoload.php';

class EmailService {
    private $mail;
    private $debug = false; // Set to true to see errors
    
    public function __construct() {
        $this->mail = new PHPMailer(true);
        
        // Server settings
        $this->mail->isSMTP();
        $this->mail->Host       = 'smtp.gmail.com';
        $this->mail->SMTPAuth   = true;
        
        // 🔴 REPLACE WITH YOUR GMAIL DETAILS
        $this->mail->Username   = 'hansikamithyangani@gmail.com';  // Your Gmail address
        $this->mail->Password   = 'ihod erya xrjz biep';     // Your Gmail App Password
        
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port       = 587;
        
        // Sender info
        $this->mail->setFrom('noreply@medicareplus.com', 'MediCare+');
        $this->mail->addReplyTo('support@medicareplus.com', 'Support');
        
        // Content settings
        $this->mail->isHTML(true);
        $this->mail->CharSet = 'UTF-8';
    }
    
    /**
     * Send payment receipt email
     * @param string $to Recipient email
     * @param string $name Recipient name
     * @param array $payment Payment details
     * @return bool Success or failure
     */
    public function sendPaymentReceipt($to, $name, $payment) {
        try {
            $this->mail->clearAddresses();
            $this->mail->addAddress($to, $name);
            
            $this->mail->Subject = 'Payment Receipt - MediCare+';
            $this->mail->Body = $this->getPaymentEmailTemplate($name, $payment);
            $this->mail->AltBody = strip_tags($this->getPaymentEmailTemplate($name, $payment));
            
            $result = $this->mail->send();
            
            if ($this->debug) {
                echo "Email sent successfully to: " . $to;
            }
            
            return $result;
            
        } catch (Exception $e) {
            if ($this->debug) {
                echo "Email error: " . $this->mail->ErrorInfo;
            }
            error_log("Email error: " . $this->mail->ErrorInfo);
            return false;
        }
    }
    
    /**
     * Send appointment confirmation email
     * @param string $to Recipient email
     * @param string $name Recipient name
     * @param array $appointment Appointment details
     * @return bool Success or failure
     */
    public function sendAppointmentConfirmation($to, $name, $appointment) {
        try {
            $this->mail->clearAddresses();
            $this->mail->addAddress($to, $name);
            
            $this->mail->Subject = 'Appointment Confirmation - MediCare+';
            $this->mail->Body = $this->getAppointmentEmailTemplate($name, $appointment);
            $this->mail->AltBody = strip_tags($this->getAppointmentEmailTemplate($name, $appointment));
            
            return $this->mail->send();
            
        } catch (Exception $e) {
            error_log("Email error: " . $this->mail->ErrorInfo);
            return false;
        }
    }
    
    /**
     * Payment receipt email template
     */
    private function getPaymentEmailTemplate($name, $payment) {
        return '
        <!DOCTYPE html>
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; background-color: #f4f4f4; }
                .container { max-width: 600px; margin: 20px auto; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
                .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 30px; text-align: center; }
                .header h2 { margin: 0; font-size: 28px; }
                .content { padding: 30px; }
                .receipt-box { background: #f8f9fa; padding: 20px; border-radius: 10px; margin: 20px 0; border-left: 4px solid #28a745; }
                .receipt-box p { margin: 10px 0; }
                .label { font-weight: bold; color: #555; width: 120px; display: inline-block; }
                .amount { font-size: 24px; color: #28a745; font-weight: bold; }
                .footer { background: #f8f9fa; padding: 20px; text-align: center; color: #666; font-size: 12px; }
                .btn { display: inline-block; padding: 12px 30px; background: #006666; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h2>💰 Payment Receipt</h2>
                    <p>Thank you for your payment!</p>
                </div>
                <div class="content">
                    <p>Hello <strong>' . htmlspecialchars($name) . '</strong>,</p>
                    <p>Your payment has been successfully processed.</p>
                    
                    <div class="receipt-box">
                        <h3 style="margin-top: 0; color: #333;">Transaction Details:</h3>
                        <p><span class="label">Transaction ID:</span> ' . $payment['transaction_id'] . '</p>
                        <p><span class="label">Amount:</span> <span class="amount">LKR ' . number_format($payment['amount'], 2) . '</span></p>
                        <p><span class="label">Date:</span> ' . date('Y-m-d H:i:s') . '</p>
                    </div>
                    
                    <p>You can view all your transactions in your payment history.</p>
                    
                    <div style="text-align: center;">
                        <a href="http://localhost/medicare_plus/PaymentHist.php" class="btn">View Payment History</a>
                    </div>
                </div>
                <div class="footer">
                    <p>&copy; ' . date('Y') . ' MediCare+. All rights reserved.</p>
                    <p>This is an automated message, please do not reply.</p>
                </div>
            </div>
        </body>
        </html>
        ';
    }
    
    /**
     * Appointment confirmation email template
     */
    private function getAppointmentEmailTemplate($name, $appointment) {
        return '
        <!DOCTYPE html>
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; background-color: #f4f4f4; }
                .container { max-width: 600px; margin: 20px auto; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
                .header { background: linear-gradient(135deg, #006666 0%, #009999 100%); color: white; padding: 30px; text-align: center; }
                .content { padding: 30px; }
                .appointment-box { background: #f8f9fa; padding: 20px; border-radius: 10px; margin: 20px 0; border-left: 4px solid #006666; }
                .label { font-weight: bold; color: #555; width: 120px; display: inline-block; }
                .footer { background: #f8f9fa; padding: 20px; text-align: center; color: #666; font-size: 12px; }
                .btn { display: inline-block; padding: 12px 30px; background: #006666; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h2>📅 Appointment Confirmation</h2>
                </div>
                <div class="content">
                    <p>Hello <strong>' . htmlspecialchars($name) . '</strong>,</p>
                    <p>Your appointment has been confirmed!</p>
                    
                    <div class="appointment-box">
                        <h3 style="margin-top: 0; color: #333;">Appointment Details:</h3>
                        <p><span class="label">Doctor:</span> ' . $appointment['doctor'] . '</p>
                        <p><span class="label">Date:</span> ' . $appointment['date'] . '</p>
                        <p><span class="label">Time:</span> ' . $appointment['time'] . '</p>
                    </div>
                    
                    <p>Please arrive 10 minutes before your scheduled time.</p>
                    
                    <div style="text-align: center;">
                        <a href="http://localhost/medicare_plus/appointments.php" class="btn">View My Appointments</a>
                    </div>
                </div>
                <div class="footer">
                    <p>&copy; ' . date('Y') . ' MediCare+. All rights reserved.</p>
                </div>
            </div>
        </body>
        </html>
        ';
    }
    
    /**
     * Simple test function to check if email works
     */
    public function testEmail($to) {
        try {
            $this->mail->clearAddresses();
            $this->mail->addAddress($to);
            $this->mail->Subject = 'Test Email from MediCare+';
            $this->mail->Body = '<h2>Test Email</h2><p>If you receive this, email is working!</p>';
            
            return $this->mail->send();
        } catch (Exception $e) {
            return false;
        }
    }
}
?>