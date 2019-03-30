<?php
exit(); // do nothing
$to      = $email;
$subject = 'Prog03 Email Verification';
$message = 'Verify you email with the following link:';
$headers = 'From: sjbaile1@svsu.edu' . "\r\n" .
    'Reply-To: gpcorser@svsu.edu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>