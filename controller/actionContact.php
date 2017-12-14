<?php

$inputFirstName = htmlspecialchars($_POST['inputFirstName']);
$inputLastName = htmlspecialchars($_POST['inputLastName']);
$inputMail = htmlspecialchars($_POST['inputMail']);
$txtAreaContact = htmlspecialchars($_POST['txtAreaContact']);
$message = '<p>Nouveau message de '.strtoupper($inputLastName).' '.$inputFirstName.' : </p><p><em>'.$txtAreaContact.'</em></p><p>Vous pouvez le recontacter à cette adresse mail : <b>'.$inputMail.'</b></p>';

$to = 'notifications@smxme.fr';
$subject = 'Message de contact provenant de ' . strtoupper($inputLastName) . " " . $inputFirstName;
$headers = 'From: '. $inputMail . "\r\n" .
'Content-type: text/html; charset="utf-8"';

mail($to, $subject, $message, $headers);
?>