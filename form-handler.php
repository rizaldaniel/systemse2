<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@yourwebsite.com'; /*dito magsesend yung mga messages nila*/

$email_subject = 'New Form Submission';

$email_body = "User Name: $name. \n".
            "User Email: $visitor_email. \n".
            "Subject: $visitor_email. \n".
            "User Message: $message. \n"; /*semi-colon to stop here */


$to = 'cpdiolata@ccc.edu.ph'; /**email we want to receive the inquries */

$header = "From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header); /**it will send all the information in email id */

header("Location: contact.html"); /**kung saang html file mo sya ikoconnect */

?>