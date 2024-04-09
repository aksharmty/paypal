# paypal
paypal sandbox integration in php
upload all file 
<----------------------------------------------------------------->

change database details in dbconnect.php
<----------------------------------------------------------------->

change database details in config.php

define('PAYPAL_ID', 'Insert_PayPal_Business_Email');  replace this define('PAYPAL_ID', 'your_PayPal_Business_Email'); 

<----------------------------------------------------------------->
Auto Return and Payment Data Transfer on PayPal Sandbox Account
login paypal ==> setting profile ==> Website preferences ==> Click the Update link on Website preferences
Add success url
<----------------------------------------------------------------->

setting profile ==> Website payment ==> Click the Update link on Website preferences
Add success url
<----------------------------------------------------------------->

Enable PayPal Instant Payment Notification (IPN)

setting profile ==> Website preferences ==> Click the Update link on Instant Payment Notification (IPN) page
Add ipn url
<----------------------------------------------------------------->

for test card visit
https://developer.paypal.com/tools/sandbox/card-testing/
