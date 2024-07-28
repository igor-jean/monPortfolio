<?php
$nom = $_GET["nom"];
$email = $_GET["email"];
$tel = $_GET["telephone"];

$prenom = $_GET["prenom"] ?? "";
$message = $_GET["message"] ?? "";
$chk = $_GET["chk"] ?? "";

$to      = 'igorjean79@gmail.com';
$subject = 'Message depuis mon Portfolio';
$contenu = `<h1>Message depuis mon Portfolio</h1><p>Nom: $nom<br>Prenom: $prenom<br>Email: $email<br>Téléphone: $tel<br>Message: $message</p>`;
$headers = 'From: ' . $email . '' . "\r\n" .
    'Reply-To: ' . $email . '' . "\r\n" .
    "Content-Type: text/html; charset=UTF-8\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $contenu, $headers);
