<?php 
/* 
 * PayPal and database configuration 
 */ 
  
// PayPal configuration 
define('PAYPAL_ID', 'Insert_PayPal_Business_Email'); 
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 
 
define('PAYPAL_RETURN_URL', 'https://example.com/success.php'); 
define('PAYPAL_CANCEL_URL', 'https://example.com/cancel.php'); 
define('PAYPAL_NOTIFY_URL', 'https://example.com/ipn.php'); 
define('PAYPAL_CURRENCY', 'USD'); 
 
// Database configuration 
define('DB_HOST', 'database host name'); 
define('DB_USERNAME', 'database username'); 
define('DB_PASSWORD', 'database password'); 
define('DB_NAME', 'database name'); 
 
// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");
?>
