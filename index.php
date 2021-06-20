<?php
if (isset(strip_tags($_POST['contact-send']))) {

$name = strip_tags($_POST['contact-name']);
$email = strip_tags($_POST['contact-email']);
$message = strip_tags($_POST['contact-message']);

$send_to = "freier-mann@tutanota.com";
$subject = "Anmeldung";
$headers = 
'From: "Freier Mann" <freier-mann@tutanota.com>' . "\r\n" .
'Reply-To: ' . $name . '<' . $email . '>' . "\r\n" .
'Content-type: text/plain; charset=iso-8859-1';
'X-Mailer: PHP/' . phpversion();
$success = "<p class=\"formsuccess\">Danke für deine Anmeldung!</p>";


$content = "
Vorname: $name
E-Mail: $email

Nachricht: $message
";

mail($send_to,$subject,$content,$headers);
echo $success;
?>
