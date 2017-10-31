<?php

$inputFirstName = $_POST['inputFirstName'];
$inputLastName = $_POST['inputLastName'];
$inputMail = $_POST['inputMail'];
$txtAreaContact = $_POST['txtAreaContact'];
echo('<p>Nouveau message de '.htmlspecialchars(strtoupper($inputLastName)).' '.htmlspecialchars($inputFirstName).' : </p><p><em>'.htmlspecialchars($txtAreaContact).'</em></p><p>Vous pouvez le recontacter à cette adresse mail : <b>'.htmlspecialchars($inputMail).'</b></p>');
?>