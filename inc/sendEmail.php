<?php
// Get Data
$name = trim(stripslashes($_POST['contactName']));
$email = trim(stripslashes($_POST['contactEmail']));
$subject = trim(stripslashes($_POST['contactSubject']));
$contact_message = trim(stripslashes($_POST['contactMessage']));

// Send Message
mail( "michael.register@hotmail.com", $subject,
"Name: $name\nEmail: $email\nMessage: $message\n",
"From: noReply <michaelregister@github.io>" );
?>